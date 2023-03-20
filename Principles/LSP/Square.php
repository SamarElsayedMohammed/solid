<?php
namespace SOLID\LSP;

class Square extends Rectangle{

	public function setHeight($height): self {
		$this->height = $height;
		$this->width = $height;
		return $this;
	}
	public function setWidth($width): self {
		$this->width = $width;
		$this->height = $width;
		return $this;
	}
}