<?php

namespace common\models;

use common\helpers\Tree;

trait ModelLevelTrait
{
    protected function getTreeInfos($infos, $key, $parentKey, $name, $parentValue = 0)
    {
        foreach ($infos as $id => $info) {
            $parentId = isset($infos[$info[$parentKey]]['id']) ? $infos[$info[$parentKey]]['id'] : 0;
            $parentNode = $parentId ? 'child-of-node-' . $parentId : '';
            $info['parentNode'] = $parentNode;
            $level = $this->getLevel($id, $infos, $parentKey);
            $info['level'] = $level;
            $infos[$id] = $info;
        }

        $tree = new Tree($infos, $key, $parentKey, $name);
        $formatedInfos = $tree->getTree($parentValue);

        return $formatedInfos;
    }

    protected function getLevelInfos($infos, $key, $parentKey, $name, $parentValue = 0)
    {
        $tree = new Tree($infos, $key, $parentKey, $name);
        $formatedInfos = $tree->getTree($parentValue);
        $datas = [];
        foreach ($formatedInfos as $code => $info) {
            $nameShow = str_replace('&nbsp;', '-', $info[$name]);
            $datas[$code] = $nameShow;
        }

        return $datas;
    }

    /**
     * Get the level of a multi level infos
     *
     * @return int
     */
    protected function getLevel($currentKey, $infos, $parentField = 'parentid', $level = 0)
    {
        foreach($infos as $key => $info){
            if ($currentKey == $key) {
                if (empty($info[$parentField])) {
                    return $level;
                }
                $level++;
                return $this->getLevel($info[$parentField], $infos, $parentField, $level);
            }
        }
    }
}
