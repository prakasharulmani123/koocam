<div data-scrollable>
    <div class="sidebar-block">
        <div class="profile">
            <a href="#">
                <?php echo CHtml::image("{$this->themeUrl}/img/people/110/avatar5.png", 'Image', array('class' => 'img-circle width-80')) ?>
            </a>
            <h4 class="text-display-1 margin-none"><?php echo Yii::app()->user->name; ?></h4>
        </div>
    </div>
    <?php
    $this->widget('zii.widgets.CMenu', array(
        'activateParents' => true,
        'encodeLabel' => false,
        'activateItems' => true,
        'items' => array(
            array('label' => '<i class="fa fa-dashboard"></i> <span>Dashboard</span>', 'url' => array('/admin/default/index') /* Yii::app()->homeUrl */, 'visible' => '1'),
//            array('label' => '<i class="fa fa-cog"></i> <span>Administration</span>', 'url' => '#course-menu',
//                'itemOptions' => array('class' => 'hasSubmenu'),
//                'submenuOptions' => array('id' => 'course-menu'),
//                'visible' => '1',
//                'items' => array(
//                    array('label' => '<i class="fa fa-weixin"></i> <span>Society</span>', 'url' => array('/site/society/index'), 'visible' => '1'),
//                    array('label' => '<i class="fa fa-music"></i> <span>Roles</span>', 'url' => array('/site/masterrole/index'), 'visible' => '1'),
//                    array('label' => '<i class="fa fa-user"></i> <span>Operator</span>', 'url' => array('/site/user/index'), 'visible' => '1'),
//                ),
//            ),
        ),
        'htmlOptions' => array('class' => 'sidebar-menu')
    ));
    ?>
</div>