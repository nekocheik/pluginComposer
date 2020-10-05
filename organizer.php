<?php
/**
 * Class organizer
 * @author yourname
 */
class organizer
{
  /**
   * @param dependencies
   */
  public function __construct(array $dependencies )
  {
    $this->$dependencies = $dependencies;
  }
  
}
