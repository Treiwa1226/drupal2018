<?php

namespace Drupal\geocoder_geofield\Geocoder\Dumper;

use Geocoder\Dumper\Dumper;
use Geocoder\Model\Address;

/**
 * Class for Geohash.
 */
class Geohash extends Geometry implements Dumper {
  /**
   * Dumper.
   *
   * @var \Geocoder\Dumper\Dumper
   */
  protected $dumper;

  /**
   * Geophp.
   *
   * @var GeoPHPWrapper
   */
  protected $geophp;

  /**
   * Address.
   *
   * @inheritdoc
   */
  public function dump(Address $address) {
    return parent::dump($address)->out('geohash');
  }

}
