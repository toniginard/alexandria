<?php

class com_wiris_quizzes_impl_QuestionInternal extends com_wiris_util_xml_SerializableImpl implements com_wiris_quizzes_api_Question{
	public function __construct() { if(!php_Boot::$skip_constructor) {
		parent::__construct();
	}}
	public function getAlgorithm() {
		return null;
	}
	public function setAlgorithm($session) {
	}
	public function getCorrectAnswersLength() {
		return 0;
	}
	public function getCorrectAnswer($index) {
		return null;
	}
	public function setCorrectAnswer($index, $answer) {
	}
	public function setAnswerFieldType($type) {
	}
	public function setOption($name, $value) {
	}
	public function addAssertion($name, $correctAnswer, $studentAnswer, $parameters) {
	}
	public function getStudentQuestion() {
		return null;
	}
	public function hasId() {
		return false;
	}
	public function setId($id) {
	}
	public function getImpl() {
		return null;
	}
	function __toString() { return 'com.wiris.quizzes.impl.QuestionInternal'; }
}
