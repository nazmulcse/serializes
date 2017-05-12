<?php
namespace Serializes;

class Helper
{

  public function makeSerialize($data = [])
  {
    if(is_array($data) || is_object($data)){
      return serialize($data);
    }
    return $data;
  }

}
