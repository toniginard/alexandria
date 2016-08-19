<?php

class com_wiris_quizzes_impl_Assertion extends com_wiris_util_xml_SerializableImpl {
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		parent::__construct();
	}}
	public function copyArrayInt($a) {
		$b = new _hx_array(array());
		$i = null;
		{
			$_g1 = 0; $_g = $a->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$b[$i1] = $a[$i1];
				unset($i1);
			}
		}
		return $b;
	}
	public function copy() {
		$a = new com_wiris_quizzes_impl_Assertion();
		$a->name = $this->name;
		$a->correctAnswer = $this->copyArrayInt($this->correctAnswer);
		$a->answer = $this->copyArrayInt($this->answer);
		if($this->parameters !== null) {
			$a->parameters = new _hx_array(array());
			$i = null;
			{
				$_g1 = 0; $_g = $this->parameters->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					$p = $this->parameters[$i1];
					$q = new com_wiris_quizzes_impl_AssertionParam();
					$q->name = $p->name;
					$q->type = $p->type;
					$q->content = $p->content;
					$a->parameters->push($q);
					unset($q,$p,$i1);
				}
			}
		}
		return $a;
	}
	public function isCheck() {
		return com_wiris_quizzes_impl_Assertion::inArray($this->name, com_wiris_quizzes_impl_Assertion::$checks);
	}
	public function isEquivalence() {
		return com_wiris_quizzes_impl_Assertion::inArray($this->name, com_wiris_quizzes_impl_Assertion::$equivalent) || com_wiris_quizzes_impl_Assertion::$EQUIVALENT_SET === $this->name;
	}
	public function isSyntactic() {
		return com_wiris_quizzes_impl_Assertion::isSyntacticName($this->name);
	}
	public function inIntArray($e, $a) {
		$i = null;
		{
			$_g1 = 0; $_g = $a->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if($e === $a[$i1]) {
					return true;
				}
				unset($i1);
			}
		}
		return false;
	}
	public function equalLists($a, $b) {
		$aa = _hx_explode(",", $a);
		$bb = _hx_explode(",", $b);
		if($aa->length !== $bb->length) {
			return false;
		}
		$i = null;
		{
			$_g1 = 0; $_g = $aa->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if(!com_wiris_quizzes_impl_Assertion::inArray($aa[$i1], $bb)) {
					return false;
				}
				unset($i1);
			}
		}
		return true;
	}
	public function isDefaultParameterValue($name, $value) {
		$defValue = com_wiris_quizzes_impl_Assertion::getParameterDefaultValue($this->name, $name);
		return $this->equalLists($defValue, $value);
	}
	public function getParam($name) {
		if($this->parameters !== null) {
			$i = null;
			{
				$_g1 = 0; $_g = $this->parameters->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					if(_hx_array_get($this->parameters, $i1)->name === $name) {
						return _hx_array_get($this->parameters, $i1)->content;
					}
					unset($i1);
				}
			}
		}
		if(com_wiris_quizzes_impl_Assertion::$paramdefault === null) {
			com_wiris_quizzes_impl_Assertion::initParams();
		}
		if(com_wiris_quizzes_impl_Assertion::$paramdefault->exists($this->name)) {
			$values = com_wiris_quizzes_impl_Assertion::$paramdefault->get($this->name);
			if($values->exists($name)) {
				return $values->get($name);
			}
		}
		return null;
	}
	public function setParam($name, $value) {
		if($this->parameters === null) {
			$this->parameters = new _hx_array(array());
		}
		if($this->isDefaultParameterValue($name, $value)) {
			$j = $this->parameters->length - 1;
			while($j >= 0) {
				if(_hx_array_get($this->parameters, $j)->name === $name) {
					$this->parameters->remove($this->parameters[$j]);
				}
				$j--;
			}
		} else {
			$found = false;
			$i = null;
			{
				$_g1 = 0; $_g = $this->parameters->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					$p = $this->parameters[$i1];
					if($p->name === $name) {
						$p->content = $value;
						$found = true;
					}
					unset($p,$i1);
				}
			}
			if(!$found) {
				$q = new com_wiris_quizzes_impl_AssertionParam();
				$q->name = $name;
				$q->content = $value;
				$q->type = com_wiris_quizzes_impl_MathContent::$TYPE_TEXT;
				$this->parameters->push($q);
			}
		}
	}
	public function getAnswers() {
		if($this->answer !== null) {
			return $this->answer;
		} else {
			return new _hx_array(array());
		}
	}
	public function getAnswer() {
		if($this->answer !== null && $this->answer->length > 0) {
			return $this->answer[0];
		} else {
			return -1;
		}
	}
	public function addAnswer($a) {
		$current = $this->getAnswers();
		if(!$this->inIntArray($a, $current)) {
			$newa = new _hx_array(array());
			$i = null;
			{
				$_g1 = 0; $_g = $current->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					$newa[$i1] = $current[$i1];
					unset($i1);
				}
			}
			$newa[$current->length] = $a;
			$this->setAnswers($newa);
		}
	}
	public function setAnswers($a) {
		$this->answer = $a;
	}
	public function setAnswer($a) {
		$this->setAnswers(new _hx_array(array($a)));
	}
	public function getCorrectAnswers() {
		if($this->correctAnswer !== null) {
			return $this->correctAnswer;
		} else {
			return new _hx_array(array());
		}
	}
	public function getCorrectAnswer() {
		if($this->correctAnswer !== null && $this->correctAnswer->length > 0) {
			return $this->correctAnswer[0];
		} else {
			return -1;
		}
	}
	public function removeCorrectAnswer($ca) {
		if($this->hasCorrectAnswer($ca)) {
			$current = $this->getCorrectAnswers();
			$newca = new _hx_array(array());
			$i = null;
			$j = 0;
			{
				$_g1 = 0; $_g = $current->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					if($current[$i1] !== $ca) {
						$newca[$j] = $current[$i1];
						$j++;
					}
					unset($i1);
				}
			}
			$this->setCorrectAnswers($newca);
		}
	}
	public function hasAnswer($a) {
		return $this->inIntArray($a, $this->getAnswers());
	}
	public function hasCorrectAnswer($ca) {
		return $this->inIntArray($ca, $this->getCorrectAnswers());
	}
	public function addCorrectAnswer($ca) {
		$current = $this->getCorrectAnswers();
		if(!$this->inIntArray($ca, $current)) {
			$newca = new _hx_array(array());
			$i = null;
			{
				$_g1 = 0; $_g = $current->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					$newca[$i1] = $current[$i1];
					unset($i1);
				}
			}
			$newca[$current->length] = $ca;
			$this->setCorrectAnswers($newca);
		}
	}
	public function setCorrectAnswers($ca) {
		$this->correctAnswer = $ca;
	}
	public function setCorrectAnswer($ca) {
		$this->setCorrectAnswers(new _hx_array(array($ca)));
	}
	public function newInstance() {
		return new com_wiris_quizzes_impl_Assertion();
	}
	public function onSerialize($s) {
		$s->beginTag(com_wiris_quizzes_impl_Assertion::$tagName);
		$this->name = $s->attributeString("name", $this->name, null);
		$this->correctAnswer = $s->attributeIntArray("correctAnswer", $this->correctAnswer, new _hx_array(array(0)));
		$this->answer = $s->attributeIntArray("answer", $this->answer, new _hx_array(array(0)));
		$this->parameters = $s->serializeArray($this->parameters, com_wiris_quizzes_impl_AssertionParam::$tagName);
		$s->endTag();
	}
	public $parameters;
	public $answer;
	public $correctAnswer;
	public $name;
	public function __call($m, $a) {
		if(isset($this->$m) && is_callable($this->$m))
			return call_user_func_array($this->$m, $a);
		else if(isset($this->�dynamics[$m]) && is_callable($this->�dynamics[$m]))
			return call_user_func_array($this->�dynamics[$m], $a);
		else if('toString' == $m)
			return $this->__toString();
		else
			throw new HException('Unable to call �'.$m.'�');
	}
	static $tagName = "assertion";
	static $SYNTAX_EXPRESSION = "syntax_expression";
	static $SYNTAX_QUANTITY = "syntax_quantity";
	static $SYNTAX_STRING = "syntax_string";
	static $SYNTAX_LIST = "syntax_list";
	static $PARAM_NO_BRACKETS_LIST = "nobracketslist";
	static $EQUIVALENT_SYMBOLIC = "equivalent_symbolic";
	static $EQUIVALENT_LITERAL = "equivalent_literal";
	static $EQUIVALENT_EQUATIONS = "equivalent_equations";
	static $EQUIVALENT_FUNCTION = "equivalent_function";
	static $EQUIVALENT_ALL = "equivalent_all";
	static $PARAM_ORDER_MATTERS = "ordermatters";
	static $PARAM_REPETITION_MATTERS = "repetitionmatters";
	static $CHECK_INTEGER_FORM = "check_integer_form";
	static $CHECK_FRACTION_FORM = "check_fraction_form";
	static $CHECK_POLYNOMIAL_FORM = "check_polynomial_form";
	static $CHECK_RATIONAL_FUNCTION_FORM = "check_rational_function_form";
	static $CHECK_ELEMENTAL_FUNCTION_FORM = "check_elemental_function_form";
	static $CHECK_SCIENTIFIC_NOTATION = "check_scientific_notation";
	static $CHECK_SIMPLIFIED = "check_simplified";
	static $CHECK_EXPANDED = "check_expanded";
	static $CHECK_FACTORIZED = "check_factorized";
	static $CHECK_NO_COMMON_FACTOR = "check_no_common_factor";
	static $CHECK_DIVISIBLE = "check_divisible";
	static $CHECK_COMMON_DENOMINATOR = "check_common_denominator";
	static $CHECK_UNIT = "check_unit";
	static $CHECK_UNIT_LITERAL = "check_unit_literal";
	static $CHECK_NO_MORE_DECIMALS = "check_no_more_decimals";
	static $CHECK_NO_MORE_DIGITS = "check_no_more_digits";
	static $CHECK_RATIONALIZED = "check_rationalized";
	static $CHECK_MINIMAL_RADICANDS = "check_minimal_radicands";
	static $EQUIVALENT_SET = "equivalent_set";
	static $syntactic;
	static $equivalent;
	static $structure;
	static $checks;
	static $BASIC_UNITS_LIST;
	static $CURRENCY_UNITS_LIST;
	static $ANGLE_UNITS_LIST;
	static $PERCENT_UNITS_LIST;
	static $ALL_UNITS_LIST;
	static $paramdefault;
	static $paramnames;
	static function initParams() {
		com_wiris_quizzes_impl_Assertion::$paramnames = new Hash();
		com_wiris_quizzes_impl_Assertion::$paramnames->set("syntax_expression", new _hx_array(array("constants", "functions", "listoperators", "groupoperators", "itemseparators", "decimalseparators", "digitgroupseparators", "nobracketslist", "intervals", "textlogicoperators")));
		com_wiris_quizzes_impl_Assertion::$paramnames->set("syntax_list", new _hx_array(array("constants", "functions")));
		com_wiris_quizzes_impl_Assertion::$paramnames->set("syntax_quantity", new _hx_array(array("constants", "units", "unitprefixes", "groupoperators", "mixedfractions", "itemseparators", "decimalseparators", "digitgroupseparators", "nobracketslist")));
		com_wiris_quizzes_impl_Assertion::$paramnames->set("check_divisible", new _hx_array(array("value")));
		com_wiris_quizzes_impl_Assertion::$paramnames->set("check_unit", new _hx_array(array("unit")));
		com_wiris_quizzes_impl_Assertion::$paramnames->set("check_unit_literal", new _hx_array(array("unit")));
		com_wiris_quizzes_impl_Assertion::$paramnames->set("check_no_more_decimals", new _hx_array(array("digits")));
		com_wiris_quizzes_impl_Assertion::$paramnames->set("check_no_more_digits", new _hx_array(array("digits")));
		com_wiris_quizzes_impl_Assertion::$paramnames->set("equivalent_function", new _hx_array(array("name")));
		com_wiris_quizzes_impl_Assertion::$paramnames->set("equivalent_symbolic", new _hx_array(array("ordermatters")));
		com_wiris_quizzes_impl_Assertion::$paramnames->set("equivalent_symbolic", new _hx_array(array("repetitionmatters")));
		com_wiris_quizzes_impl_Assertion::$paramnames->set("equivalent_literal", new _hx_array(array("ordermatters")));
		com_wiris_quizzes_impl_Assertion::$paramnames->set("equivalent_literal", new _hx_array(array("repetitionmatters")));
		$paramvalues = null;
		com_wiris_quizzes_impl_Assertion::$paramdefault = new Hash();
		$constants = com_wiris_quizzes_impl_Assertion_0($paramvalues) . ", e, i, j";
		$functions = "exp, log, ln, sin, cos, tan, asin, acos, atan, arcsin, arccos, arctan, cosec, csc, sec, cotan, cot, acosec, acsc, asec, acotan, acot, sen, asen, arcsen, sinh, cosh, tanh, asinh, acosh, atanh, arcsinh, arccosh, arctanh, cosech, csch, sech, cotanh, coth, acosech, acsch, asech, acotanh, acoth, senh, asenh, arcsenh, min, max, sign";
		$groupoperators = "(,[";
		$listoperators = "{";
		$paramvalues = new Hash();
		$paramvalues->set("constants", $constants);
		$paramvalues->set("functions", $functions);
		$paramvalues->set("groupoperators", $groupoperators);
		$paramvalues->set("listoperators", $listoperators);
		$paramvalues->set("itemseparators", ";, \\n, \\,");
		$paramvalues->set("decimalseparators", ".");
		$paramvalues->set("digitgroupseparators", "");
		$paramvalues->set("nobracketslist", "false");
		$paramvalues->set("intervals", "false");
		com_wiris_quizzes_impl_Assertion::$paramdefault->set("syntax_expression", $paramvalues);
		$paramvalues = new Hash();
		$paramvalues->set("constants", $constants);
		$paramvalues->set("functions", $functions);
		com_wiris_quizzes_impl_Assertion::$paramdefault->set("syntax_list", $paramvalues);
		$paramvalues = new Hash();
		$paramvalues->set("constants", $constants);
		$paramvalues->set("groupoperators", $groupoperators);
		$paramvalues->set("listoperators", $listoperators);
		$paramvalues->set("units", com_wiris_quizzes_impl_Assertion::$ALL_UNITS_LIST);
		$paramvalues->set("unitprefixes", "m, c, k, M");
		$paramvalues->set("mixedfractions", "false");
		$paramvalues->set("itemseparators", ";, \\n");
		$paramvalues->set("decimalseparators", "', " . com_wiris_quizzes_impl_Assertion_1($constants, $functions, $groupoperators, $listoperators, $paramvalues) . ", ., \\,");
		$paramvalues->set("digitgroupseparators", "");
		$paramvalues->set("nobracketslist", "false");
		com_wiris_quizzes_impl_Assertion::$paramdefault->set("syntax_quantity", $paramvalues);
		$paramvalues = new Hash();
		$paramvalues->set("ordermatters", "true");
		$paramvalues->set("repetitionmatters", "true");
		com_wiris_quizzes_impl_Assertion::$paramdefault->set("equivalent_symbolic", $paramvalues);
		$paramvalues = new Hash();
		$paramvalues->set("ordermatters", "true");
		$paramvalues->set("repetitionmatters", "true");
		com_wiris_quizzes_impl_Assertion::$paramdefault->set("equivalent_literal", $paramvalues);
		$paramvalues = new Hash();
		$paramvalues->set("value", "");
		com_wiris_quizzes_impl_Assertion::$paramdefault->set("check_divisible", $paramvalues);
		$paramvalues = new Hash();
		$paramvalues->set("unit", "");
		com_wiris_quizzes_impl_Assertion::$paramdefault->set("check_unit", $paramvalues);
		$paramvalues = new Hash();
		$paramvalues->set("unit", "");
		com_wiris_quizzes_impl_Assertion::$paramdefault->set("check_unit_literal", $paramvalues);
		$paramvalues = new Hash();
		$paramvalues->set("digits", "");
		com_wiris_quizzes_impl_Assertion::$paramdefault->set("check_no_more_decimals", $paramvalues);
		$paramvalues = new Hash();
		$paramvalues->set("digits", "");
		com_wiris_quizzes_impl_Assertion::$paramdefault->set("check_no_more_digits", $paramvalues);
		$paramvalues = new Hash();
		$paramvalues->set("name", "");
		com_wiris_quizzes_impl_Assertion::$paramdefault->set("equivalent_function", $paramvalues);
	}
	static function getParameterNames($name) {
		if(com_wiris_quizzes_impl_Assertion::$paramnames === null) {
			com_wiris_quizzes_impl_Assertion::initParams();
		}
		return com_wiris_quizzes_impl_Assertion::$paramnames->get($name);
	}
	static function getParameterDefaultValue($assertion, $parameter) {
		$value = null;
		if(com_wiris_quizzes_impl_Assertion::$paramdefault === null) {
			com_wiris_quizzes_impl_Assertion::initParams();
		}
		if(com_wiris_quizzes_impl_Assertion::$paramdefault->exists($assertion) && com_wiris_quizzes_impl_Assertion::$paramdefault->get($assertion)->exists($parameter)) {
			$value = com_wiris_quizzes_impl_Assertion::$paramdefault->get($assertion)->get($parameter);
		} else {
			$value = "";
		}
		return $value;
	}
	static function inArray($e, $a) {
		$i = null;
		{
			$_g1 = 0; $_g = $a->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if($e === $a[$i1]) {
					return true;
				}
				unset($i1);
			}
		}
		return false;
	}
	static function isSyntacticName($name) {
		return com_wiris_quizzes_impl_Assertion::inArray($name, com_wiris_quizzes_impl_Assertion::$syntactic);
	}
	function __toString() { return 'com.wiris.quizzes.impl.Assertion'; }
}
com_wiris_quizzes_impl_Assertion::$syntactic = new _hx_array(array(com_wiris_quizzes_impl_Assertion::$SYNTAX_EXPRESSION, com_wiris_quizzes_impl_Assertion::$SYNTAX_QUANTITY, com_wiris_quizzes_impl_Assertion::$SYNTAX_STRING));
com_wiris_quizzes_impl_Assertion::$equivalent = new _hx_array(array(com_wiris_quizzes_impl_Assertion::$EQUIVALENT_LITERAL, com_wiris_quizzes_impl_Assertion::$EQUIVALENT_SYMBOLIC, com_wiris_quizzes_impl_Assertion::$EQUIVALENT_EQUATIONS, com_wiris_quizzes_impl_Assertion::$EQUIVALENT_ALL, com_wiris_quizzes_impl_Assertion::$EQUIVALENT_FUNCTION));
com_wiris_quizzes_impl_Assertion::$structure = new _hx_array(array(com_wiris_quizzes_impl_Assertion::$CHECK_INTEGER_FORM, com_wiris_quizzes_impl_Assertion::$CHECK_FRACTION_FORM, com_wiris_quizzes_impl_Assertion::$CHECK_POLYNOMIAL_FORM, com_wiris_quizzes_impl_Assertion::$CHECK_RATIONAL_FUNCTION_FORM, com_wiris_quizzes_impl_Assertion::$CHECK_ELEMENTAL_FUNCTION_FORM, com_wiris_quizzes_impl_Assertion::$CHECK_SCIENTIFIC_NOTATION));
com_wiris_quizzes_impl_Assertion::$checks = new _hx_array(array(com_wiris_quizzes_impl_Assertion::$CHECK_SIMPLIFIED, com_wiris_quizzes_impl_Assertion::$CHECK_EXPANDED, com_wiris_quizzes_impl_Assertion::$CHECK_FACTORIZED, com_wiris_quizzes_impl_Assertion::$CHECK_RATIONALIZED, com_wiris_quizzes_impl_Assertion::$CHECK_NO_COMMON_FACTOR, com_wiris_quizzes_impl_Assertion::$CHECK_MINIMAL_RADICANDS, com_wiris_quizzes_impl_Assertion::$CHECK_DIVISIBLE, com_wiris_quizzes_impl_Assertion::$CHECK_COMMON_DENOMINATOR, com_wiris_quizzes_impl_Assertion::$CHECK_UNIT, com_wiris_quizzes_impl_Assertion::$CHECK_UNIT_LITERAL, com_wiris_quizzes_impl_Assertion::$CHECK_NO_MORE_DECIMALS, com_wiris_quizzes_impl_Assertion::$CHECK_NO_MORE_DIGITS));
com_wiris_quizzes_impl_Assertion::$BASIC_UNITS_LIST = "m, s, g, A, K, mol, cd, rad, sr, h, min, l, N, Pa, Hz, W, J, C, V, " . com_wiris_quizzes_impl_Assertion_2() . ", F, S, Wb, b, H, T, lx, lm, Gy, Bq, Sv, kat";
com_wiris_quizzes_impl_Assertion::$CURRENCY_UNITS_LIST = "\$, " . com_wiris_quizzes_impl_Assertion_3() . ", " . com_wiris_quizzes_impl_Assertion_4() . ", " . com_wiris_quizzes_impl_Assertion_5() . ", kr, Fr, " . com_wiris_quizzes_impl_Assertion_6() . ", " . com_wiris_quizzes_impl_Assertion_7() . ", руб, BTC";
com_wiris_quizzes_impl_Assertion::$ANGLE_UNITS_LIST = com_wiris_quizzes_impl_Assertion_8() . ", ', \"";
com_wiris_quizzes_impl_Assertion::$PERCENT_UNITS_LIST = "%, " . com_wiris_quizzes_impl_Assertion_9();
com_wiris_quizzes_impl_Assertion::$ALL_UNITS_LIST = com_wiris_quizzes_impl_Assertion::$ANGLE_UNITS_LIST . ", " . com_wiris_quizzes_impl_Assertion::$BASIC_UNITS_LIST . ", " . com_wiris_quizzes_impl_Assertion::$PERCENT_UNITS_LIST . ", " . com_wiris_quizzes_impl_Assertion::$CURRENCY_UNITS_LIST;
function com_wiris_quizzes_impl_Assertion_0(&$paramvalues) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(960);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_Assertion_1(&$constants, &$functions, &$groupoperators, &$listoperators, &$paramvalues) {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(180);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_Assertion_2() {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(937);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_Assertion_3() {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(165);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_Assertion_4() {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(8364);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_Assertion_5() {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(163);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_Assertion_6() {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(8361);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_Assertion_7() {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(8377);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_Assertion_8() {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(176);
		return $s->toString();
	}
}
function com_wiris_quizzes_impl_Assertion_9() {
	{
		$s = new haxe_Utf8(null);
		$s->addChar(8240);
		return $s->toString();
	}
}
