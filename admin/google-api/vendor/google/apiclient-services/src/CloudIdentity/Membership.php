<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\CloudIdentity;

class Membership extends \Google\Collection
{
  protected $collection_key = 'roles';
  public $createTime;
  public $name;
  protected $preferredMemberKeyType = EntityKey::class;
  protected $preferredMemberKeyDataType = '';
  protected $rolesType = MembershipRole::class;
  protected $rolesDataType = 'array';
  public $type;
  public $updateTime;

  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param EntityKey
   */
  public function setPreferredMemberKey(EntityKey $preferredMemberKey)
  {
    $this->preferredMemberKey = $preferredMemberKey;
  }
  /**
   * @return EntityKey
   */
  public function getPreferredMemberKey()
  {
    return $this->preferredMemberKey;
  }
  /**
   * @param MembershipRole[]
   */
  public function setRoles($roles)
  {
    $this->roles = $roles;
  }
  /**
   * @return MembershipRole[]
   */
  public function getRoles()
  {
    return $this->roles;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Membership::class, 'Google_Service_CloudIdentity_Membership');