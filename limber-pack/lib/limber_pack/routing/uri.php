<?php

/*
 * Copyright 2009 Limber Framework
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *	   http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License. 
 */

namespace LimberPack\Routing;

class Uri
{
	public static function querystring()
	{
		return trim(array_get($_SERVER, "PATH_INFO", ""), "/");
	}
	
	/**
	 * Get Resquest Method
	 *
	 * @return string
	 */
	public static function method()
	{
		$method = $_SERVER["REQUEST_METHOD"];
		
		if ($method == "POST" && isset($_POST["_method"])) {
			$method = $_POST["_method"];
		}
		
		return strtolower($method);
	}
}
