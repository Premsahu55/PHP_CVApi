<?php

namespace CVApi\Contracts;

interface QueryBuilderContract
{
	public function grayscale();
	public function bgrToGray();
	public function grayToBgr();
	public function rgbToGray();
	public function grayToRgb();
	public function bgrToRgb();
	public function rgbToBgr();
	public function rgbToHsv();
	public function bgrToHsv();
	public function hsvToBgr();
	public function hsvToRgb();
	public function histogram();
	public function imageChannels($array = []);
	public function translate($x, $y);
	public function rotate($x, $y, $angle);
	public function transpose();
	public function enlarge($fx, $fy, $interpolation);
	public function reduce($fx, $fy);
	public function resize($fx, $fy, $interpolation);
	public function crop($y1, $y2, $x1, $x2);
	public function brightness($value);
	public function darken($value);
	public function blur($kernel_size);
	public function normalBlur($box_size);
	public function gaussianBlur($kernel_size);
	public function medianBlur($size);
	public function bilateralBlur();
	public function sharpen();
	public function threshold($min, $max, $type);
	public function adaptiveThreshold($type);
	public function dilate();
	public function erode();
	public function opening();
	public function closing();
	public function morphGradient();
	public function topHat();
	public function blackHat();
	public function pyrUp($times = 1);
	public function pyrDown($times = 1);
	public function faceDetection();
	public function faceEyeDetection();
	public function eyeDetection();
	public function detectFace();
	public function dominantColors($clusters = 4);
	public function detectMelanoma();
}
