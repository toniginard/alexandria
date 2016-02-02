<?php

class com_wiris_quizzes_impl_HandwritingConstraints {
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		if(com_wiris_quizzes_impl_HandwritingConstraints::$ALL_SYMBOLS === null) {
			com_wiris_quizzes_impl_HandwritingConstraints::$ALL_SYMBOLS = _hx_explode(" ", com_wiris_quizzes_impl_HandwritingConstraints::$ALL_SYMBOLS_STRING);
		}
		if(com_wiris_quizzes_impl_HandwritingConstraints::$SYMBOL_CONFLICTS === null) {
			com_wiris_quizzes_impl_HandwritingConstraints::$SYMBOL_CONFLICTS = new _hx_array(array(new _hx_array(array("x", "X", "×")), new _hx_array(array(".", ",")), new _hx_array(array("2", "z")), new _hx_array(array("5", "s", "S", "\$")), new _hx_array(array("1", ",", "|", "'")), new _hx_array(array("i", "j")), new _hx_array(array("y", "4", "Y")), new _hx_array(array("p", "P")), new _hx_array(array("c", "C", "(")), new _hx_array(array("0", "o", "O", "°")), new _hx_array(array("Δ", "A")), new _hx_array(array("B", "β")), new _hx_array(array("∃", "3")), new _hx_array(array("9", "q", "g")), new _hx_array(array("9", "a")), new _hx_array(array("v", "V")), new _hx_array(array("r", "σ")), new _hx_array(array("t", "+")), new _hx_array(array("∈", "E")), new _hx_array(array("n", "h"))));
		}
		if(com_wiris_quizzes_impl_HandwritingConstraints::$SYMBOL_DEFAULT_EXCLUDED === null) {
			com_wiris_quizzes_impl_HandwritingConstraints::$SYMBOL_DEFAULT_EXCLUDED = new _hx_array(array(new _hx_array(array("sin", "cos", "tan"))));
		}
	}}
	public function getNegativeConstraints() {
		$h = new com_wiris_quizzes_impl_HandwritingConstraints();
		$h->symbols = new _hx_array(array());
		$h->structure = $this->structure;
		$blocked = new _hx_array(array());
		$i = null;
		{
			$_g1 = 0; $_g = com_wiris_quizzes_impl_HandwritingConstraints::$SYMBOL_CONFLICTS->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$conflictSet = com_wiris_quizzes_impl_HandwritingConstraints::$SYMBOL_CONFLICTS[$i1];
				$exclude = new _hx_array(array());
				$j = null;
				{
					$_g3 = 0; $_g2 = $conflictSet->length;
					while($_g3 < $_g2) {
						$j1 = $_g3++;
						if(!com_wiris_quizzes_impl_HandwritingConstraints::inArray($conflictSet[$j1], $this->symbols)) {
							$exclude->push($conflictSet[$j1]);
						}
						unset($j1);
					}
					unset($_g3,$_g2);
				}
				if($exclude->length < $conflictSet->length) {
					$_g3 = 0; $_g2 = $exclude->length;
					while($_g3 < $_g2) {
						$j1 = $_g3++;
						$blocked->push($exclude[$j1]);
						unset($j1);
					}
					unset($_g3,$_g2);
				}
				unset($j,$i1,$exclude,$conflictSet);
			}
		}
		{
			$_g1 = 0; $_g = com_wiris_quizzes_impl_HandwritingConstraints::$SYMBOL_DEFAULT_EXCLUDED->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$defaultExcluded = com_wiris_quizzes_impl_HandwritingConstraints::$SYMBOL_DEFAULT_EXCLUDED[$i1];
				$exclude = true;
				$j = null;
				{
					$_g3 = 0; $_g2 = $defaultExcluded->length;
					while($_g3 < $_g2) {
						$j1 = $_g3++;
						if(com_wiris_quizzes_impl_HandwritingConstraints::inArray($defaultExcluded[$j1], $this->symbols)) {
							$exclude = false;
						}
						unset($j1);
					}
					unset($_g3,$_g2);
				}
				if($exclude) {
					$_g3 = 0; $_g2 = $defaultExcluded->length;
					while($_g3 < $_g2) {
						$j1 = $_g3++;
						$blocked->push($defaultExcluded[$j1]);
						unset($j1);
					}
					unset($_g3,$_g2);
				}
				unset($j,$i1,$exclude,$defaultExcluded);
			}
		}
		{
			$_g1 = 0; $_g = com_wiris_quizzes_impl_HandwritingConstraints::$ALL_SYMBOLS->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if(!com_wiris_quizzes_impl_HandwritingConstraints::inArray(com_wiris_quizzes_impl_HandwritingConstraints::$ALL_SYMBOLS[$i1], $blocked)) {
					$h->symbols->push(com_wiris_quizzes_impl_HandwritingConstraints::$ALL_SYMBOLS[$i1]);
				}
				unset($i1);
			}
		}
		return $h;
	}
	public function toJSON() {
		$h = new Hash();
		$h->set("symbols", $this->symbols);
		$h->set("structure", $this->structure);
		return com_wiris_util_json_JSon::encode($h);
	}
	public function pushSorted($a, $o) {
		$i = 0;
		while($i < $a->length && com_wiris_quizzes_impl_HTMLTools::compareStrings($a[$i], $o) < 0) {
			$i++;
		}
		if($i === $a->length) {
			$a->push($o);
		} else {
			if(com_wiris_quizzes_impl_HTMLTools::compareStrings($a[$i], $o) > 0) {
				$a->insert($i, $o);
			}
		}
	}
	public function addStructureFromText($t) {
		if(_hx_index_of($t, "/", null) !== -1) {
			$this->pushSorted($this->structure, com_wiris_quizzes_impl_HandwritingConstraints::$FRACTIONS);
		}
		if(_hx_index_of($t, "sqrt", null) !== -1 || _hx_index_of($t, "root", null) !== -1) {
			$this->pushSorted($this->structure, com_wiris_quizzes_impl_HandwritingConstraints::$RADICALS);
		}
	}
	public function addStructureFromMathML($m) {
		if(_hx_index_of($m, "<mfrac", null) !== -1) {
			$this->pushSorted($this->structure, com_wiris_quizzes_impl_HandwritingConstraints::$FRACTIONS);
		}
		if(_hx_index_of($m, "<mroot", null) !== -1 || _hx_index_of($m, "<msqrt", null) !== -1) {
			$this->pushSorted($this->structure, com_wiris_quizzes_impl_HandwritingConstraints::$RADICALS);
		}
		if(_hx_index_of($m, "<munderover", null) !== -1 || _hx_index_of($m, "<munder", null) !== -1) {
			$this->pushSorted($this->structure, com_wiris_quizzes_impl_HandwritingConstraints::$BIGOPERATORS);
		}
		if(_hx_index_of($m, "<mtable", null) !== -1) {
			$this->pushSorted($this->structure, com_wiris_quizzes_impl_HandwritingConstraints::$PIECEWISE);
			$this->pushSorted($this->structure, com_wiris_quizzes_impl_HandwritingConstraints::$MATRICES);
		}
	}
	public function addToken($t) {
		if(!StringTools::startsWith($t, "#")) {
			$t = com_wiris_util_xml_WXmlUtils::htmlUnescape($t);
			$this->pushSorted($this->symbols, $t);
		}
	}
	public function addTagContent($s, $tag, $split) {
		$end = 0;
		$start = 0;
		while($start !== -1 && $end !== -1 && ($start = _hx_index_of($s, "<" . $tag, $end)) !== -1) {
			$start = _hx_index_of($s, ">", $start);
			if($start !== -1 && _hx_char_code_at($s, $start - 1) !== 47) {
				$start++;
				$end = _hx_index_of($s, "<", $start);
				if($end !== -1) {
					$content = _hx_substr($s, $start, $end - $start);
					if($split) {
						$i = 0;
						while($i < strlen($content)) {
							$c = com_wiris_quizzes_impl_HandwritingConstraints_0($this, $content, $end, $i, $s, $split, $start, $tag);
							$this->addToken($c);
							$i += strlen($c);
							unset($c);
						}
						unset($i);
					} else {
						$this->addToken($content);
					}
					unset($content);
				}
			}
		}
	}
	public function addSymbolsFromMathML($s) {
		$tokenTags = new _hx_array(array("mi", "mn", "mo"));
		$i = null;
		{
			$_g1 = 0; $_g = $tokenTags->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$this->addTagContent($s, $tokenTags[$i1], $tokenTags[$i1] === "mn");
				unset($i1);
			}
		}
	}
	public function addSymbolsFromText($text) {
		$this->addSymbolsFromMathML(_hx_deref(new com_wiris_quizzes_impl_HTMLTools())->textToMathML($text));
	}
	public function addQuestionInstanceConstraints($qi) {
		if($qi->hasVariables()) {
			$mvars = $qi->getMathMLVariables();
			if($mvars !== null) {
				$keys = $mvars->keys();
				while($keys->hasNext()) {
					$content = $mvars->get($keys->next());
					$this->addSymbolsFromMathML($content);
					$this->addStructureFromMathML($content);
					unset($content);
				}
			}
			$tvars = $qi->getTextVariables();
			if($tvars !== null) {
				$keys = $tvars->keys();
				while($keys->hasNext()) {
					$content = $tvars->get($keys->next());
					$this->addSymbolsFromText($content);
					$this->addStructureFromText($content);
					unset($content);
				}
			}
		}
	}
	public function addQuestionConstraints($q) {
		$h = new com_wiris_quizzes_impl_HTMLTools();
		$i = null;
		{
			$_g1 = 0; $_g = $q->getCorrectAnswerLength();
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$answer = $q->getCorrectAnswer($i1);
				$answer = $h->prepareFormulas($answer);
				if(com_wiris_quizzes_impl_MathContent::getMathType($answer) === com_wiris_quizzes_impl_MathContent::$TYPE_MATHML) {
					$this->addSymbolsFromMathML($answer);
					$this->addStructureFromMathML($answer);
				} else {
					$this->addSymbolsFromText($answer);
					$this->addStructureFromText($answer);
				}
				unset($i1,$answer);
			}
		}
	}
	public $structure;
	public $symbols;
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
	static $ALL_SYMBOLS_STRING;
	static $ALL_SYMBOLS;
	static $SYMBOL_CONFLICTS;
	static $SYMBOL_DEFAULT_EXCLUDED;
	static $GENERAL = "General";
	static $FRACTIONS = "Fraction";
	static $BIGOPERATORS = "BigOperator";
	static $RADICALS = "Radical";
	static $PIECEWISE = "PiecewiseFunction";
	static $MATRICES = "Matrix";
	static function readHandwritingConstraints($json) {
		$hc = new com_wiris_quizzes_impl_HandwritingConstraints();
		$obj = com_wiris_util_json_JSon::decode($json);
		$hc->symbols = (($obj->exists("symbols")) ? $obj->get("symbols") : new _hx_array(array()));
		$hc->structure = (($obj->exists("structure")) ? $obj->get("structure") : new _hx_array(array()));
		return $hc;
	}
	static function newHandwritingConstraints() {
		$hc = new com_wiris_quizzes_impl_HandwritingConstraints();
		$hc->symbols = new _hx_array(array());
		$hc->structure = new _hx_array(array());
		$hc->structure->push(com_wiris_quizzes_impl_HandwritingConstraints::$GENERAL);
		$hc->structure->push(com_wiris_quizzes_impl_HandwritingConstraints::$FRACTIONS);
		return $hc;
	}
	static function inArray($s, $a) {
		$i = null;
		{
			$_g1 = 0; $_g = $a->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if(_hx_equal($a[$i1], $s)) {
					return true;
				}
				unset($i1);
			}
		}
		return false;
	}
	function __toString() { return 'com.wiris.quizzes.impl.HandwritingConstraints'; }
}
com_wiris_quizzes_impl_HandwritingConstraints::$ALL_SYMBOLS_STRING = "0 1 2 3 4 5 6 7 8 9 a A α b B β c C . , ... : cos cm d dm Δ ÷ / e E = ∃ f " . "F ∀ g G γ ≥ > h H i I ∈ ∞ ∫ j k l L λ ≤ lim log { [ ( < m M μ n N ≠ o p " . "P φ π ± ′ q r R → } ] ) s S σ sin √ ∑ ∏ t T tan θ × u v V w x X y Y z | - " . "! + ^ ° € \$ £ %";
function com_wiris_quizzes_impl_HandwritingConstraints_0(&$�this, &$content, &$end, &$i, &$s, &$split, &$start, &$tag) {
	{
		$s1 = new haxe_Utf8(null);
		$s1->addChar(haxe_Utf8::charCodeAt(_hx_substr($content, $i, null), 0));
		return $s1->toString();
	}
}
