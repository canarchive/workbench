<?php
namespace subsite\decoration\models;

class SignupForm extends Model
{
    use SignupFormTrait;
    public $city_input;
    public $area_input;
    public $quoteInfo = [];
	public $merchantInfo = [];
    public $existOwner;
}
