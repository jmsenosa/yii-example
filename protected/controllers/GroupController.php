<?php

class GroupController extends Controller
{
	public function actionIndex()
	{

		$groups = Group::model()->with('owner', 'followers')->findAllByAttributes(array('user_id' => '1'));

		foreach ($groups as $key => $group) {
			echo "Group Name: ".$group->group_name."<br />"; // should have used "name"
			echo "created by: ".$group->owner->email."<br />";
			echo "Members:"."<br />";
			foreach ($group->followers as $follower) {
				echo $follower->email."<br />";
			}

		}
		// $this->render('index');
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
