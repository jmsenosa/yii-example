<?php

class GroupController extends Controller
{
	public function actionIndex()
	{

		$groups = Group::model()->with('owner', 'followers')->findAllByAttributes(array('user_id' => '1'));

		foreach ($groups as $key => $group) {
			echo "Group Name: ".$group->group_name."\n"; // should have used "name"
			echo "test";
		}
		$this->render('index');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
