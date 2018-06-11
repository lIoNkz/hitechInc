<style>
	.td {
		padding: 3px 10px;
		font-size: 1.1em;
	}
</style>
<h3>Заказ с нашего сайта ( Hitech-hq.kz )</h3>
<br>
	<p>	  {{ $name }}</b> <br></p>
	<p>	   {{ $email }} <br></p>
	<p>	<b>Телефон:</b>   {{ $phone }} <br></p>
	<p>	<b>Тип услуги:</b>   {{ $service_type }} <br></p>
<table>
	<tbody>
		<tr>
			<td class="td"><b>Имя:</b></td>
			<td class="td">{{ $name }}</td>
		</tr>
		<tr>
			<td class="td"><b>Email:</b></td>
			<td class="td">{{ $email }}</td>
		</tr>
		<tr>
			<td class="td"><b>Телефон:</b></td>
			<td class="td">{{ $phone }}</td>
		</tr>
		<tr>
			<td class="td"><b>Тип услуги:</b> </td>
			<td class="td">{{ $service_type }}</td>
		</tr>
	</tbody>
</table>