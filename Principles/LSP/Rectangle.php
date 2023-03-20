<?php
namespace SOLID\LSP;

class Rectangle {
    /**
     * @var int
     */
    protected $width;
    /**
     * @var int
     */
    protected $height;
    


	/**
	 * 
	 * @return int
	 */
	public function getHeight() {
		return $this->height;
	}
	
	/**
	 * 
	 * @param int $height 
	 * @return self
	 */
	public function setHeight($height): self {
		$this->height = $height;
		return $this;
	}

	/**
	 * 
	 * @return int
	 */
	public function getWidth() {
		return $this->width;
	}
	
	/**
	 * 
	 * @param int $width 
	 * @return self
	 */
	public function setWidth($width): self {
		$this->width = $width;
		return $this;
	}

    public function calculateArea(): int {
        return $this->getHeight() * $this->getWidth();

    }
}