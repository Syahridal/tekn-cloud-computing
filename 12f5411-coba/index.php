<?php
$no=0;foreach($data as $datas):$no++;
		$button = "
		<div class='btn-group'>
			<button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Aksi</button>
			<div class='dropdown-menu'>
				<a class='dropdown-item' href='' data-toggle='modal' data-target='#update-".$datas['userid']."'>Update</a>
				<a class='dropdown-item' href='' data-toggle='modal' data-target='#password-".$datas['userid']."'>Password</a>
			</div>
		</div>
		";
			echo "
			<tr>
			<td>".$no."</td>
			<td>".$datas['name']."</td>
			<td>".$datas['DeptName']."</td>
			<td>".$button."</td>
			</tr>
			";
		endforeach;
?>