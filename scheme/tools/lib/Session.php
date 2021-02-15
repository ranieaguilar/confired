<?php
defined('BASE_DIRECTORY') OR exit('Direct access are not allowed');
/**
 * __________________________________________________________________
 *
 * ConfiRed - an opensource light & basic PHP MVC Framework
 * __________________________________________________________________
 *
 * MIT License
 * 
 * Copyright (c) 2020 Wilfred V. Pine
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package ConfiRed
 * @author Wilfred V. Pine <only.master.red@gmail.com>
 * @copyright Copyright 2020 (https://red.confired.com)
 * @link https://confired.com
 * @license https://opensource.org/licenses/MIT MIT License
 */


/*
 * -------------------------------------------------------
 *  Session
 * -------------------------------------------------------
 */
class Session{
    
    /*
	 * -------------------------------------------------------
	 *  Up
	 * -------------------------------------------------------
	 */
    static function up($key = null){
		if(!is_null($key)) {
			if(isset($_SESSION[$key])){
                return true;
            }
		}
		return false;
	}

    /*
	 * -------------------------------------------------------
	 *  Push
	 * -------------------------------------------------------
	 */
    static function push($arr=array()){
        foreach($arr as $var => $val){
            $_SESSION[$var] = $val;
        }
    }

    /*
	 * -------------------------------------------------------
	 *  Clear
	 * -------------------------------------------------------
	 */
    static function clear($keys=array()){
        foreach($keys as $key) {
			if(Self::up($key)){
                unset($_SESSION[$key]);
            }
		}
    }

    /*
	 * -------------------------------------------------------
	 *  Pull
	 * -------------------------------------------------------
	 */
    static function pull($key = null){
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }else{
            return null;
        }
    }

    /*
	 * -------------------------------------------------------
	 *  Terminate Session
	 * -------------------------------------------------------
	 */
    static function terminate(){
		session_destroy();
	}
}

?>