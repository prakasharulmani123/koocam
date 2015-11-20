<?php

/**
 * Site controller
 */
class GigController extends Controller {

    /**
     * @array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    public function actions() {
        return array(
            'download' => 'application.components.actions.download',
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array(''),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'upload'),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'actions' => array(),
                'users' => array('*'),
            ),
        );
    }

    /**
     * 
     */
    public function actionCreate() {
        $model = new Gig('create');

        $this->performAjaxValidation($model);

        if (Yii::app()->request->isPostRequest && Yii::app()->request->getPost('Gig')) {
            $model->attributes = Yii::app()->request->getPost('Gig');
            $model->tutor_id = Yii::app()->user->id;
            if ($model->save()) {
                if ($model->is_extra == 1) {
                    $extra_model = new GigExtra;
                    $extra_model->attributes = array(
                        'extra_price' => $model->extra_price,
                        'extra_description' => $model->extra_desc,
                        'gig_id' => $model->gig_id,
                    );
                    $extra_model->save();
                }
                Yii::app()->user->setFlash('success', "Gig created");
                $this->refresh();
            }
        }
        $this->render('create', compact('model'));
    }

    public function actionUpload() {
        Yii::import("ext.EAjaxUpload.qqFileUploader");

        $folder = 'upload/temp/'; // folder for uploaded files
        $allowedExtensions = array("jpg"); //array("jpg","jpeg","gif","exe","mov" and etc...
        $sizeLimit = 10 * 1024 * 1024; // maximum file size in bytes
        $uploader = new qqFileUploader($allowedExtensions, $sizeLimit);
        $result = $uploader->handleUpload($folder);
        $return = htmlspecialchars(json_encode($result), ENT_NOQUOTES);

        $fileSize = filesize($folder . $result['filename']); //GETTING FILE SIZE
        $fileName = $result['filename']; //GETTING FILE NAME

        echo $return; // it's array
    }

    /**
     * 
     * @param type $model
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax'])) {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
