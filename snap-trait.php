<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Traits</title>
	</head>
	<body>
		<?php
		class Instrument {

			protected $instrumentMaker;

			public function __construct(string $newInstrumentMaker) {
				$this->instrumentMaker = $newInstrumentMaker;


			}
			//mutator method for instrument

			/**
			 * @param string $instrumentMaker
			 */
			public function setInstrumentMaker(string $instrumentMaker): void {
				$this->instrumentMaker = $instrumentMaker;
			}
			//setter function for instrument

			/**
			 * @return string
			 */
			public function getInstrumentMaker(): string {
				return $this->instrumentMaker;
			}

		}

		class Guitar extends Instrument {
			protected $price;

			//constructor
			public function __construct(string $newInstrumentMaker, float $newPrice) {
				parent::__construct($newInstrumentMaker);
			}

			//mutator method for guitar

			/**
			 * @param mixed $price
			 */
			public function setPrice($price): void {
				$this->price = $price;
			}

			//setter method for guitar

			/**
			 * @return mixed
			 */
			public function getPrice() {
				return $this->price;
			}
		}


		?>
	</body>
</html>