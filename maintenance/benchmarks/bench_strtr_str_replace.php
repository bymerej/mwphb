<?php

require_once( dirname( __FILE__ ) . '/Benchmarker.php' );
class bench_strtr_str_replace extends Benchmarker {

	public function __construct() {
		parent::__construct();
		$this->mDescription = "Benchmark for strtr() vs str_replace().";
	}

	public function execute() {
		$this->bench( array(
			array( 'function' => array( $this, 'benchstrtr' ) ),
			array( 'function' => array( $this, 'benchstr_replace' ) ),
		));
		print $this->getFormattedResults();
	}

	function benchstrtr() {
		strtr( "[[MediaWiki:Some_random_test_page]]", "_", "" );
	}

	function benchstr_replace() {
		str_replace( "_", " ", "[[MediaWiki:Some_random_test_page]]");
	}

}

$maintClass = 'bench_strtr_str_replace';
require_once( DO_MAINTENANCE );