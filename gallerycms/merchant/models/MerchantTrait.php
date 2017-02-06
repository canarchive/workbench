<?php

namespace gallerycms\merchant\models;

use Yii;

trait MerchantTrait
{
	public $tagHeaders = [
		'b' => 'budget', 
		'd' => 'decoration_sort', 
		's' => 'style', 
		'r' => 'region', 
	];

    public function _getClassPrefix()
    {
        return '\gallerycms\merchant\models\\';
    }

	public function getMerchantSortInfos()
	{
		$datas = [
			'decoration_sort' => [
				'name' => '装修类别',
			    'values' => $this->decorationSortInfos,
			],
			'style' => [
				'name' => '风格',
			    'values' => $this->styleInfos,
			],
			'budget' => [
				'name' => '装修价位',
			    'values' => $this->budgetInfos,
			],
			/*'region' => [
				'name' => '服务区域',
			    'values' => [],//$this->colorInfos,
            ],*/
		];
		return $datas;
	}

	public function formatTag($tag, $houseSortInfos)
	{
		$datas = [];
		foreach ($this->tagHeaders as $type) {
			$datas[$type] = '';
		}
		if (empty($tag)) {
			return $datas;
		}

		$infos = explode('-', $tag);
		if (empty($infos) || count($infos) > 5) {
			return false;
		}
		
		$formatInfos = [];
		$tagHeaders = array_keys($this->tagHeaders);
		foreach ($infos as $info) {
			if (strpos($info, '_') === false) {
				return false;
			}

			$subInfos = explode('_', $info);
			$key = isset($subInfos[0]) ? $subInfos[0] : false;
			$value = isset($subInfos[1]) ? $subInfos[1] : false;
			if (empty($key) || !in_array($key, $tagHeaders) || empty($value)) {
				return false;
			}

			$currentKeyValue = array_search($key, $tagHeaders);
			foreach ($tagHeaders as $tagKey => $tagValue) {
				if ($tagKey <= $currentKeyValue) {
					$tagHeaders[$tagKey] = 'exist';
				}
			}
			$typeKey = $this->tagHeaders[$key];
			if (!array_key_exists($value, $houseSortInfos[$typeKey]['values'])) {
				return false;
			}
			$datas[$typeKey] = $value;
		}

		return $datas;
	}

	public function createTag($tagInfos, $extInfo = [])
	{
		$tagInfos = array_merge($tagInfos, $extInfo);
		$tagStr = '';
		foreach ($tagInfos as $tag => $info) {
			if (empty($info)) {
				continue;
			}
			$tagStr .= substr($tag, 0, 1) . '_' . $info . '-';
		}
		return trim($tagStr, '-');
	}
}
