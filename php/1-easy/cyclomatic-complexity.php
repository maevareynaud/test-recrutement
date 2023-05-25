<?php

class StorageSizeConverter 
{

  public $precision; 

  const TRESHOLD = 1024;

  public function __construct(int $precision = 2)
  {
    $this->precision = $precision;
  }

  /**
   * Converts storage size
   *
   * @param integer $bytes
   * @return string
   */
  public function convert(int $bytes): string
  {
    $converted_size = $bytes;
    $units = ['KB','MB','GB','TB','PB', 'EB','ZB','YB', 'HB'];
    foreach($units as $unit)
    {
      if($converted_size < self::TRESHOLD)
      {
        return round($converted_size, $this->precision) . ' '. $unit;
      }

      $converted_size = $converted_size / 1024;
    }

    return $bytes . ' B';
  }
}