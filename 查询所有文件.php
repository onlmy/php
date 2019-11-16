<?php
header("content-type:text/html;charset=utf-8");

//使用递归函数查找目录及其子目录
//递归函数:在某些条件下可以调用自身形成一个循环

//此函数可以读取某个路径下的所有内容及其子内容
function readdirectory($path) {
	if (is_dir($path)) {
		echo $path, '<br>';

		$handler = opendir($path);
		while (($name = readdir($handler)) !== false) {
			if ($name != '.' && $name != '..') {
				$newpath = $path . '/' . $name;
				readdirectory($newpath);
			}
		}
		closedir($handler);
	}
	if (is_file($path)) {
		echo '文件夹', $path, '<br>';
	}
}
readdirectory('D:/图片');
