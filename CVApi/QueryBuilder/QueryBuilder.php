<?php

namespace CVApi\QueryBuilder;

trait QueryBuilder
{
	public function grayscale()
	{
		$this->options .= 'grayscale|';
		return $this;
	}

	public function bgrToGray()
	{
		$this->options .= 'bgrToGray|';
		return $this;
	}

	public function grayToBgr()
	{
		$this->options .= 'grayToBgr|';
		return $this;
	}

	public function rgbToGray()
	{
		$this->options .= 'rgbToGray|';
		return $this;
	}

	public function grayToRgb()
	{
		$this->options .= 'grayToRgb|';
		return $this;
	}

	public function bgrToRgb()
	{
		$this->options .= 'bgrToRgb|';
		return $this;
	}

	public function rgbToBgr()
	{
		$this->options .= 'rgbToBgr|';
		return $this;
	}

	public function rgbToHsv()
	{
		$this->options .= 'rgbToHsv|';
		return $this;
	}

	public function bgrToHsv()
	{
		$this->options .= 'bgrToHsv|';
		return $this;
	}

	public function hsvToBgr()
	{
		$this->options .= 'hsvToBgr|';
		return $this;
	}

	public function hsvToRgb()
	{
		$this->options .= 'hsvToRgb|';
		return $this;
	}

	public function histogram($bean_size = 256, $range_min = 0, $range_max = 256)
	{
		$this->options .= 'histogram:' . $bean_size . ':' . $range_min . ':' . $range_max  .'|';
		return $this;
	}

	public function imageChannels($array = ['B', 'G', 'R'])
	{
		if (in_array('B', $array)) 
			$this->options .= 'blueChannel|';
		if (in_array('G', $array))
			$this->options .= 'greenChannel|';
		if (in_array('R', $array))
			$this->options .= 'redChannel|';
		return $this;
	}

	public function translate($x, $y)
	{
		$this->options .= 'translate:' . $x . ':' . $y . '|';
		return $this; 
	}

	public function rotate($x, $y, $angle)
	{
		$this->options .= 'rotate:' . $x . ':' . $y . ':' . $angle . '|';
		return $this;
	}

	public function transpose()
	{
		$this->options .= 'transpose:|';
		return $this;
	}

	public function enlarge($fx, $fy, $interpolation)
	{	
		$this->options .= 'enlarge:' . $fx . ':' . $fy . ':' . $interpolation . '|';
		return $this;
	}

	public function reduce($fx, $fy)
	{
		$this->options .= 'reduce:' . $fx . ':' . $fy . '|';
		return $this;
	}

	public function resize($x, $y, $interpolation)
	{
		$this->options .= 'resize:' . $x . ':' . $y . ':' .  $interpolation . '|';
		return $this;
	}

	public function crop($y1, $y2, $x1, $x2)
	{	
		$this->options .= 'crop:' . $y1 . ':' . $y2 . ':' . $x1 . ':' . $x2 . '|';
		return $this;
	}

	public function brightness($value)
	{
		$this->options .= 'brightness:'. $value . '|';
		return $this;
	}

	public function darken($value)
	{
		$this->options .= 'darken:'. $value . '|';
		return $this;
	}

	public function blur($kernel_size)
	{
		$this->options .= 'blur:' . $kernel_size . '|';
		return $this;
	}

	public function normalBlur($box_size)
	{
		$this->options .= 'normalBlur:' . $box_size . '|';
		return $this;
	}

	public function gaussianBlur($kernel_size)
	{
		$this->options .= 'gaussianBlur:' . $kernel_size . '|';
		return $this;
	}

	public function medianBlur($size)
	{
		$this->options .= 'medianBlur:' . $size . '|';
		return $this;
	}

	public function bilateralBlur()
	{
		$this->options .= 'bilateralBlur:|';
		return $this;
	}

	public function sharpen()
	{
		$this->options .= 'sharpen:|'; 
		return $this;
	}

	public function threshold($min, $max, $type)
	{
		$this->options .= 'threshold:' . $min . ':' . $max . ':' . $type . '|';
		return $this;
	}

	public function adaptiveThreshold($type)
	{
		$this->options .= 'adaptiveThreshold:' . $type . '|';
		return $this;
	}

	public function dilate($kernel_size = 3, $iterations = 1)
	{
		$this->options .= 'dilate:' . $kernel_size . ':' . $iterations . '|';
		return $this;
	}

	public function erode($kernel_size = 3, $iterations = 1)
	{
		$this->options .= 'erode:' . $kernel_size . ':' . $iterations . '|';
		return $this;
	}

	public function opening($kernel_size = 3)
	{	
		$this->options .= 'opening:' . $kernel_size . '|';
		return $this;
	}

	public function closing($kernel_size = 3)
	{
		$this->options .= 'closing:' . $kernel_size . '|';
		return $this;
	}

	public function morphGradient($kernel_size = 3)
	{
		$this->options .= 'morphGradient:' . $kernel_size . '|';
		return $this;
	}

	public function topHat($kernel_size = 3)
	{
		$this->options .= 'topHat:' . $kernel_size . '|';
		return $this;
	}

	public function blackHat($kernel_size = 3)
	{
		$this->options .= 'blackHat:' . $kernel_size . '|';
		return $this;
	}

	public function pyrUp($times = 1)
	{
		$this->options .= 'pyrUp:' . $times . '|';
		return $this;
	}

	public function pyrDown($times = 1)
	{
		$this->options .= 'pyrDown:' . $times . '|'; 
		return $this;
	}

	public function faceDetection()
	{
		$this->options .= 'faceDetection:|';
		return $this;
	}

	public function faceEyeDetection()
	{
		$this->options .= 'faceEyeDetection:|';
		return $this;
	}

	public function eyeDetection()
	{
		$this->options .= 'eyeDetection:|';
		return $this;
	}

	public function detectFace()
	{
		$this->options .= 'detectFace:|';
		return $this;
	}

	public function dominantColors($clusters = 4)
	{
		$this->options .= 'dominantColors:' . $clusters . '|';
		return $this;
	}

	public function detectMelanoma()
	{
		$this->options .= 'detectMelanoma|';
		return $this;
	}
}