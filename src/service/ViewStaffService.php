<?php

namespace xjryanse\view\service;

use xjryanse\system\interfaces\MainModelInterface;

/**
 * 
 */
class ViewStaffService extends Base implements MainModelInterface {

    use \xjryanse\traits\InstTrait;
    use \xjryanse\traits\MainModelTrait;
    use \xjryanse\traits\MainModelRamTrait;
    use \xjryanse\traits\MainModelCacheTrait;
    use \xjryanse\traits\MainModelCheckTrait;
    use \xjryanse\traits\MainModelGroupTrait;
    use \xjryanse\traits\MainModelQueryTrait;

    use \xjryanse\traits\StaticModelTrait;
    
    protected static $mainModel;
    protected static $mainModelClass = '\\xjryanse\\view\\model\\ViewStaff';

    /**
     * 钩子-保存前
     */
    public static function ramPreSave(&$data, $uuid) {
        
    }

    /**
     * 钩子-保存后
     */
    public static function ramAfterSave(&$data, $uuid) {
        
    }

    /**
     * 钩子-更新前
     */
    public static function ramPreUpdate(&$data, $uuid) {
        
    }

    /**
     * 钩子-更新后
     */
    public static function ramAfterUpdate(&$data, $uuid) {
        
    }

    /**
     * 钩子-删除前
     */
    public function ramPreDelete() {
        
    }

    /**
     * 钩子-删除后
     */
    public function ramAfterDelete() {
        
    }

    /**
     * 角色key
     */
    public function fRoleKey() {
        return $this->getFFieldValue(__FUNCTION__);
    }
    /**
     * 
     */
    public static function isStaff($id){
        $con[] = ['id','=',$id];
        return self::staticConCount($con);
    }

    /**
     *
     */
    public function fId() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     *
     */
    public function fCompanyId() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 【简单系统使用】部门id（用户归属的部门）
     */
    public function fDeptId() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 【冗余】归属客户id，单一
     */
    public function fCustomerId() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 推荐注册的用户id
     */
    public function fRecUserId() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 升级推荐人，当degree为senior，flagship时有
     */
    public function fDegreeRecUserId() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 人员内部编码
     */
    public function fUserCode() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 用户名
     */
    public function fUsername() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 会员等级：normal普通会员；senior：高级会员；flagship：旗舰会员
     */
    public function fDegree() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 等级截止时间
     */
    public function fDegreeEndTime() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 用户头像【存id】
     */
    public function fHeadimg() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 密码
     */
    public function fPassword() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 手机
     */
    public function fPhone() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 平台昵称
     */
    public function fNickname() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 真实姓名
     */
    public function fRealname() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 姓名-手机号码
     */
    public function fNamePhone() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 微信号
     */
    public function fWxId() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 邮箱
     */
    public function fEmail() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 地址
     */
    public function fAddress() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 性别(1男,2女)
     */
    public function fSex() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 生日
     */
    public function fBirthday() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 身份证号
     */
    public function fIdNo() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 注册来源
     */
    public function fSource() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 后台类型:
      '':无后台权限
      'normal':普通后台用户
      'super':系统超级管理员
      'subsuper'公司级超级管理

     */
    public function fAdminType() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 用户类型：customer公司；personal:个人
      （指使用公司手机还是个人手机注册）
     */
    public function fUserType() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 末次登录ip
     */
    public function fLastLoginip() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 末次登录时间
     */
    public function fLastLogintime() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 业务员（本司）
     */
    public function fBusierId() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 用户的签名
     */
    public function fSign() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     *
     */
    public function fSort() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 状态(0禁用,1启用)
     */
    public function fStatus() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 有使用(0否,1是)
     */
    public function fHasUsed() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 锁定（0：未锁，1：已锁）
     */
    public function fIsLock() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 锁定（0：未删，1：已删）
     */
    public function fIsDelete() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 备注
     */
    public function fRemark() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 创建者
     */
    public function fCreater() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 更新者
     */
    public function fUpdater() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 创建时间
     */
    public function fCreateTime() {
        return $this->getFFieldValue(__FUNCTION__);
    }

    /**
     * 更新时间
     */
    public function fUpdateTime() {
        return $this->getFFieldValue(__FUNCTION__);
    }

}
