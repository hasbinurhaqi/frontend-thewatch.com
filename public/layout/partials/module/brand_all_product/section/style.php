<style>

.control-group {
	display: inline-block;
	vertical-align: top;
	background: #fff;
	text-align: left;
	box-shadow: 0 1px 2px rgba(0,0,0,0.1);
	padding: 30px;
	width: 200px;
	height: 210px;
	margin: 10px;
}
.control {
	display: block;
	position: relative;
	padding-left: 27px;
	padding-top: 3px;
	margin-bottom: 8px;
	cursor: pointer;
	font-size: 11px;
}
.control input {
	position: absolute;
	z-index: -1;
	opacity: 0;
}
.control__indicator {
	position: absolute;
	top: 2px;
	left: 0;
	height: 15px;
	width: 15px;
	background: #e6e6e6;
}
.control--radio .control__indicator {
	border-radius: 50%;
}
.control:hover input ~ .control__indicator,
.control input:focus ~ .control__indicator {
	background: #ccc;
}
.control input:checked ~ .control__indicator {
	background: #4c757b;
}
.control:hover input:not([disabled]):checked ~ .control__indicator,
.control input:checked:focus ~ .control__indicator {
	background: #4c757b;
}
.control input:disabled ~ .control__indicator {
	background: #4c757b;
	opacity: 0.6;
	pointer-events: none;
	}
.control__indicator:after {
	content: '';
	position: absolute;
	display: none;
}
.control input:checked ~ .control__indicator:after {
	display: block;
}
.control--checkbox .control__indicator:after {
	left: 6px;
	top: 2px;
	width: 4px;
	height: 8px;
	border: solid #fff;
	border-width: 0 2px 2px 0;
	transform: rotate(45deg);
}
.control--checkbox input:disabled ~ .control__indicator:after {
	border-color: #7b7b7b;
}
.control--radio .control__indicator:after {
	left: 5px;
	top: 5px;
	height: 5px;
	width: 5px;
	border-radius: 50%;
	background: #fff;
}
.control--radio input:disabled ~ .control__indicator:after {
	background: #7b7b7b;
}
.select {
	position: relative;
	display: inline-block;
	margin-bottom: 15px;
	width: 100%;
}
.select select {
	display: inline-block;
	width: 100%;
	cursor: pointer;
	padding: 10px 15px;
	outline: 0;
	border: 0;
	border-radius: 0;
	background: #e6e6e6;
	color: #7b7b7b;
	appearance: none;
	-webkit-appearance: none;
	-moz-appearance: none;
}
.select select::-ms-expand {
	display: none;
}
.select select:hover,
.select select:focus {
	color: #000;
	background: #ccc;
}
.select select:disabled {
	opacity: 0.5;
	pointer-events: none;
}
.select__arrow {
	position: absolute;
	top: 16px;
	right: 15px;
	width: 0;
	height: 0;
	pointer-events: none;
	border-style: solid;
	border-width: 8px 5px 0 5px;
	border-color: #7b7b7b transparent transparent transparent;
}
.select select:hover ~ .select__arrow,
.select select:focus ~ .select__arrow {
	border-top-color: #000;
}
.select select:disabled ~ .select__arrow {
	border-top-color: #ccc;
}

</style>