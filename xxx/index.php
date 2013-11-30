<html>
<body>
<!-- original index.html
Select Champion by:
<form action="champ_search.php" method="post">
<select name="search_peram">
	<option value="Name">Name</option>
	<option value="Win Rate">Win Rate</option>
	<option value="Difficulty">Difficulty</option>
</select>
<input type="text" name="input_box"><br>
<input type="submit" value="Search Champion Database"><br>

<select name="champ_dropdown">
	<option value="Aatrox">Aatrox</option>
	<option value="Ahri">Ahri</option>
	<option value="Akali">Akali</option>
	<option value="Alistar">Alistar</option>
	<option value="Amumu">Amumu</option>
	<option value="Anivia">Anivia</option>
	<option value="Annie">Annie</option>
	<option value="Ashe">Ashe</option>
	<option value="Blitzcrank">Blitzcrank</option>
	<option value="Brand">Brand</option>
	<option value="Caitlyn">Caitlyn</option>
	<option value="Cassiopeia">Cassiopeia</option>
	<option value="Cho'Gath">Cho'Gath</option>
	<option value="Corki">Corki</option>
	<option value="Darius">Darius</option>
	<option value="Diana">Diana</option>
	<option value="Dr. Mundo">Dr. Mundo</option>
	<option value="Draven">Draven</option>
	<option value="Elise">Elise</option>
	<option value="Evelynn">Evelynn</option>
	<option value="Ezreal">Ezreal</option>
	<option value="Fiddlesticks">Fiddlesticks</option>
	<option value="Fiora">Fiora</option>
	<option value="Fizz">Fizz</option>
	<option value="Galio">Galio</option>
	<option value="Gangplank">Gangplank</option>
	<option value="Garen">Garen</option>
	<option value="Gragas">Gragas</option>
	<option value="Graves">Graves</option>
	<option value="Hecarim">Hecarim</option>
	<option value="Heimerdinger">Heimerdinger</option>
	<option value="Irelia">Irelia</option>
	<option value="Janna">Janna</option>
	<option value="Jarvan IV">Jarvan IV</option>
	<option value="Jax">Jax</option>
	<option value="Jayce">Jayce</option>
	<option value="Jinx">Jinx</option>
	<option value="Karma">Karma</option>
	<option value="Karthus">Karthus</option>
	<option value="Kassadin">Kassadin</option>
	<option value="Katarina">Katarina</option>
	<option value="Kayle">Kayle</option>
	<option value="Kennen">Kennen</option>
	<option value="Kha'Zix">Kha'Zix</option>
	<option value="Kog'Maw">Kog'Maw</option>
	<option value="">LeBlanc</option>
	<option value="LeBlanc">Lee Sin</option>
	<option value="Leona">Leona</option>
	<option value="Lissandra">Lissandra</option>
	<option value="Lucian">Lucian</option>
	<option value="Lulu">Lulu</option>
	<option value="Lux">Lux</option>
	<option value="Malphite">Malphite</option>
	<option value="Malzahar">Malzahar</option>
	<option value="Maokai">Maokai</option>
	<option value="Master Yi">Master Yi</option>
	<option value="Miss Fortune">Miss Fortune</option>
	<option value="Mordekaiser">Mordekaiser</option>
	<option value="Morgana">Morgana</option>
	<option value="Nami">Nami</option>
	<option value="Nasus">Nasus</option>
	<option value="Nautilus">Nautilus</option>
	<option value="Nidalee">Nidalee</option>
	<option value="Nocturne">Nocturne</option>
	<option value="Nunu">Nunu</option>
	<option value="Olaf">Olaf</option>
	<option value="Orianna">Orianna</option>
	<option value="Pantheon">Pantheon</option>
	<option value="Poppy">Poppy</option>
	<option value="Quinn">Quinn</option>
	<option value="Rammus">Rammus</option>
	<option value="Renekton">Renekton</option>
	<option value="Rengar">Rengar</option>
	<option value="Riven">Riven</option>
	<option value="Rumble">Rumble</option>
	<option value="Ryze">Ryze</option>
	<option value="Sejuani">Sejuani</option>
	<option value="Shaco">Shaco</option>
	<option value="Shen">Shen</option>
	<option value="Shyvana">Shyvana</option>
	<option value="">Singed</option>
	<option value="Singed">Sion</option>
	<option value="Sivir">Sivir</option>
	<option value="Skarner">Skarner</option>
	<option value="Sona">Sona</option>
	<option value="Soraka">Soraka</option>
	<option value="Swain">Swain</option>
	<option value="Syndra">Syndra</option>
	<option value="Talon">Talon</option>
	<option value="Taric">Taric</option>
	<option value="Teemo">Teemo</option>
	<option value="Thresh">Thresh</option>
	<option value="Tristana">Tristana</option>
	<option value="Trundle">Trundle</option>
	<option value="Tryndamere">Tryndamere</option>
	<option value="Twisted Fate">Twisted Fate</option>
	<option value="Twitch">Twitch</option>
	<option value="Udyr">Udyr</option>
	<option value="Urgot">Urgot</option>
	<option value="Varus">Varus</option>
	<option value="Vayne">Vayne</option>
	<option value="Veigar">Veigar</option>
	<option value="Vi">Vi</option>
	<option value="Viktor">Viktor</option>
	<option value="Vladimir">Vladimir</option>
	<option value="Volibear">Volibear</option>
	<option value="Warwick">Warwick</option>
	<option value="Wukong">Wukong</option>
	<option value="Xerath">Xerath</option>
	<option value="Xin Zhao">Xin Zhao</option>
	<option value="Yorick">Yorick</option>
	<option value="Zac">Zac</option>
	<option value="Zed">Zed</option>
	<option value="Ziggs">Ziggs</option>
	<option value="Zilean">Zilean</option>
	<option value="Zyra">Zyra</option>
</select>

</form>
-->

<form action="champ_search.php" method="post" target="resultsFrame">
	<table>
		
		<tr>
			<td>Question</td>
			<td>Team mate #1</td>
			<td>Team mate #2</td>
			<td>Team mate #3</td>
			<td>Team mate #4</td>
			<td>Team mate #5</td>
		</tr>
		<tr> <!--Row 1-->
			<td>Do you know any team mates?</td>
			<td>
			<select name="champ_dropdown_1">
				<option value="Default">Select Champ</option>
				<option value="Aatrox">Aatrox</option>
				<option value="Ahri">Ahri</option>
				<option value="Akali">Akali</option>
				<option value="Alistar">Alistar</option>
				<option value="Amumu">Amumu</option>
				<option value="Anivia">Anivia</option>
				<option value="Annie">Annie</option>
				<option value="Ashe">Ashe</option>
				<option value="Blitzcrank">Blitzcrank</option>
				<option value="Brand">Brand</option>
				<option value="Caitlyn">Caitlyn</option>
				<option value="Cassiopeia">Cassiopeia</option>
				<option value="Cho'Gath">Cho'Gath</option>
				<option value="Corki">Corki</option>
				<option value="Darius">Darius</option>
				<option value="Diana">Diana</option>
				<option value="Dr. Mundo">Dr. Mundo</option>
				<option value="Draven">Draven</option>
				<option value="Elise">Elise</option>
				<option value="Evelynn">Evelynn</option>
				<option value="Ezreal">Ezreal</option>
				<option value="Fiddlesticks">Fiddlesticks</option>
				<option value="Fiora">Fiora</option>
				<option value="Fizz">Fizz</option>
				<option value="Galio">Galio</option>
				<option value="Gangplank">Gangplank</option>
				<option value="Garen">Garen</option>
				<option value="Gragas">Gragas</option>
				<option value="Graves">Graves</option>
				<option value="Hecarim">Hecarim</option>
				<option value="Heimerdinger">Heimerdinger</option>
				<option value="Irelia">Irelia</option>
				<option value="Janna">Janna</option>
				<option value="Jarvan IV">Jarvan IV</option>
				<option value="Jax">Jax</option>
				<option value="Jayce">Jayce</option>
				<option value="Jinx">Jinx</option>
				<option value="Karma">Karma</option>
				<option value="Karthus">Karthus</option>
				<option value="Kassadin">Kassadin</option>
				<option value="Katarina">Katarina</option>
				<option value="Kayle">Kayle</option>
				<option value="Kennen">Kennen</option>
				<option value="Kha'Zix">Kha'Zix</option>
				<option value="Kog'Maw">Kog'Maw</option>
				<option value="">LeBlanc</option>
				<option value="LeBlanc">Lee Sin</option>
				<option value="Leona">Leona</option>
				<option value="Lissandra">Lissandra</option>
				<option value="Lucian">Lucian</option>
				<option value="Lulu">Lulu</option>
				<option value="Lux">Lux</option>
				<option value="Malphite">Malphite</option>
				<option value="Malzahar">Malzahar</option>
				<option value="Maokai">Maokai</option>
				<option value="Master Yi">Master Yi</option>
				<option value="Miss Fortune">Miss Fortune</option>
				<option value="Mordekaiser">Mordekaiser</option>
				<option value="Morgana">Morgana</option>
				<option value="Nami">Nami</option>
				<option value="Nasus">Nasus</option>
				<option value="Nautilus">Nautilus</option>
				<option value="Nidalee">Nidalee</option>
				<option value="Nocturne">Nocturne</option>
				<option value="Nunu">Nunu</option>
				<option value="Olaf">Olaf</option>
				<option value="Orianna">Orianna</option>
				<option value="Pantheon">Pantheon</option>
				<option value="Poppy">Poppy</option>
				<option value="Quinn">Quinn</option>
				<option value="Rammus">Rammus</option>
				<option value="Renekton">Renekton</option>
				<option value="Rengar">Rengar</option>
				<option value="Riven">Riven</option>
				<option value="Rumble">Rumble</option>
				<option value="Ryze">Ryze</option>
				<option value="Sejuani">Sejuani</option>
				<option value="Shaco">Shaco</option>
				<option value="Shen">Shen</option>
				<option value="Shyvana">Shyvana</option>
				<option value="">Singed</option>
				<option value="Singed">Sion</option>
				<option value="Sivir">Sivir</option>
				<option value="Skarner">Skarner</option>
				<option value="Sona">Sona</option>
				<option value="Soraka">Soraka</option>
				<option value="Swain">Swain</option>
				<option value="Syndra">Syndra</option>
				<option value="Talon">Talon</option>
				<option value="Taric">Taric</option>
				<option value="Teemo">Teemo</option>
				<option value="Thresh">Thresh</option>
				<option value="Tristana">Tristana</option>
				<option value="Trundle">Trundle</option>
				<option value="Tryndamere">Tryndamere</option>
				<option value="Twisted Fate">Twisted Fate</option>
				<option value="Twitch">Twitch</option>
				<option value="Udyr">Udyr</option>
				<option value="Urgot">Urgot</option>
				<option value="Varus">Varus</option>
				<option value="Vayne">Vayne</option>
				<option value="Veigar">Veigar</option>
				<option value="Vi">Vi</option>
				<option value="Viktor">Viktor</option>
				<option value="Vladimir">Vladimir</option>
				<option value="Volibear">Volibear</option>
				<option value="Warwick">Warwick</option>
				<option value="Wukong">Wukong</option>
				<option value="Xerath">Xerath</option>
				<option value="Xin Zhao">Xin Zhao</option>
				<option value="Yorick">Yorick</option>
				<option value="Zac">Zac</option>
				<option value="Zed">Zed</option>
				<option value="Ziggs">Ziggs</option>
				<option value="Zilean">Zilean</option>
				<option value="Zyra">Zyra</option>
			</select>
			</td>
			<td>
			<select name="champ_dropdown_2">
				<option value="Default">Select Champ</option>
				<option value="Aatrox">Aatrox</option>
				<option value="Ahri">Ahri</option>
				<option value="Akali">Akali</option>
				<option value="Alistar">Alistar</option>
				<option value="Amumu">Amumu</option>
				<option value="Anivia">Anivia</option>
				<option value="Annie">Annie</option>
				<option value="Ashe">Ashe</option>
				<option value="Blitzcrank">Blitzcrank</option>
				<option value="Brand">Brand</option>
				<option value="Caitlyn">Caitlyn</option>
				<option value="Cassiopeia">Cassiopeia</option>
				<option value="Cho'Gath">Cho'Gath</option>
				<option value="Corki">Corki</option>
				<option value="Darius">Darius</option>
				<option value="Diana">Diana</option>
				<option value="Dr. Mundo">Dr. Mundo</option>
				<option value="Draven">Draven</option>
				<option value="Elise">Elise</option>
				<option value="Evelynn">Evelynn</option>
				<option value="Ezreal">Ezreal</option>
				<option value="Fiddlesticks">Fiddlesticks</option>
				<option value="Fiora">Fiora</option>
				<option value="Fizz">Fizz</option>
				<option value="Galio">Galio</option>
				<option value="Gangplank">Gangplank</option>
				<option value="Garen">Garen</option>
				<option value="Gragas">Gragas</option>
				<option value="Graves">Graves</option>
				<option value="Hecarim">Hecarim</option>
				<option value="Heimerdinger">Heimerdinger</option>
				<option value="Irelia">Irelia</option>
				<option value="Janna">Janna</option>
				<option value="Jarvan IV">Jarvan IV</option>
				<option value="Jax">Jax</option>
				<option value="Jayce">Jayce</option>
				<option value="Jinx">Jinx</option>
				<option value="Karma">Karma</option>
				<option value="Karthus">Karthus</option>
				<option value="Kassadin">Kassadin</option>
				<option value="Katarina">Katarina</option>
				<option value="Kayle">Kayle</option>
				<option value="Kennen">Kennen</option>
				<option value="Kha'Zix">Kha'Zix</option>
				<option value="Kog'Maw">Kog'Maw</option>
				<option value="">LeBlanc</option>
				<option value="LeBlanc">Lee Sin</option>
				<option value="Leona">Leona</option>
				<option value="Lissandra">Lissandra</option>
				<option value="Lucian">Lucian</option>
				<option value="Lulu">Lulu</option>
				<option value="Lux">Lux</option>
				<option value="Malphite">Malphite</option>
				<option value="Malzahar">Malzahar</option>
				<option value="Maokai">Maokai</option>
				<option value="Master Yi">Master Yi</option>
				<option value="Miss Fortune">Miss Fortune</option>
				<option value="Mordekaiser">Mordekaiser</option>
				<option value="Morgana">Morgana</option>
				<option value="Nami">Nami</option>
				<option value="Nasus">Nasus</option>
				<option value="Nautilus">Nautilus</option>
				<option value="Nidalee">Nidalee</option>
				<option value="Nocturne">Nocturne</option>
				<option value="Nunu">Nunu</option>
				<option value="Olaf">Olaf</option>
				<option value="Orianna">Orianna</option>
				<option value="Pantheon">Pantheon</option>
				<option value="Poppy">Poppy</option>
				<option value="Quinn">Quinn</option>
				<option value="Rammus">Rammus</option>
				<option value="Renekton">Renekton</option>
				<option value="Rengar">Rengar</option>
				<option value="Riven">Riven</option>
				<option value="Rumble">Rumble</option>
				<option value="Ryze">Ryze</option>
				<option value="Sejuani">Sejuani</option>
				<option value="Shaco">Shaco</option>
				<option value="Shen">Shen</option>
				<option value="Shyvana">Shyvana</option>
				<option value="">Singed</option>
				<option value="Singed">Sion</option>
				<option value="Sivir">Sivir</option>
				<option value="Skarner">Skarner</option>
				<option value="Sona">Sona</option>
				<option value="Soraka">Soraka</option>
				<option value="Swain">Swain</option>
				<option value="Syndra">Syndra</option>
				<option value="Talon">Talon</option>
				<option value="Taric">Taric</option>
				<option value="Teemo">Teemo</option>
				<option value="Thresh">Thresh</option>
				<option value="Tristana">Tristana</option>
				<option value="Trundle">Trundle</option>
				<option value="Tryndamere">Tryndamere</option>
				<option value="Twisted Fate">Twisted Fate</option>
				<option value="Twitch">Twitch</option>
				<option value="Udyr">Udyr</option>
				<option value="Urgot">Urgot</option>
				<option value="Varus">Varus</option>
				<option value="Vayne">Vayne</option>
				<option value="Veigar">Veigar</option>
				<option value="Vi">Vi</option>
				<option value="Viktor">Viktor</option>
				<option value="Vladimir">Vladimir</option>
				<option value="Volibear">Volibear</option>
				<option value="Warwick">Warwick</option>
				<option value="Wukong">Wukong</option>
				<option value="Xerath">Xerath</option>
				<option value="Xin Zhao">Xin Zhao</option>
				<option value="Yorick">Yorick</option>
				<option value="Zac">Zac</option>
				<option value="Zed">Zed</option>
				<option value="Ziggs">Ziggs</option>
				<option value="Zilean">Zilean</option>
				<option value="Zyra">Zyra</option>
			</select>
			</td>
			<td>
			<select name="champ_dropdown_3">
				<option value="Default">Select Champ</option>
				<option value="Aatrox">Aatrox</option>
				<option value="Ahri">Ahri</option>
				<option value="Akali">Akali</option>
				<option value="Alistar">Alistar</option>
				<option value="Amumu">Amumu</option>
				<option value="Anivia">Anivia</option>
				<option value="Annie">Annie</option>
				<option value="Ashe">Ashe</option>
				<option value="Blitzcrank">Blitzcrank</option>
				<option value="Brand">Brand</option>
				<option value="Caitlyn">Caitlyn</option>
				<option value="Cassiopeia">Cassiopeia</option>
				<option value="Cho'Gath">Cho'Gath</option>
				<option value="Corki">Corki</option>
				<option value="Darius">Darius</option>
				<option value="Diana">Diana</option>
				<option value="Dr. Mundo">Dr. Mundo</option>
				<option value="Draven">Draven</option>
				<option value="Elise">Elise</option>
				<option value="Evelynn">Evelynn</option>
				<option value="Ezreal">Ezreal</option>
				<option value="Fiddlesticks">Fiddlesticks</option>
				<option value="Fiora">Fiora</option>
				<option value="Fizz">Fizz</option>
				<option value="Galio">Galio</option>
				<option value="Gangplank">Gangplank</option>
				<option value="Garen">Garen</option>
				<option value="Gragas">Gragas</option>
				<option value="Graves">Graves</option>
				<option value="Hecarim">Hecarim</option>
				<option value="Heimerdinger">Heimerdinger</option>
				<option value="Irelia">Irelia</option>
				<option value="Janna">Janna</option>
				<option value="Jarvan IV">Jarvan IV</option>
				<option value="Jax">Jax</option>
				<option value="Jayce">Jayce</option>
				<option value="Jinx">Jinx</option>
				<option value="Karma">Karma</option>
				<option value="Karthus">Karthus</option>
				<option value="Kassadin">Kassadin</option>
				<option value="Katarina">Katarina</option>
				<option value="Kayle">Kayle</option>
				<option value="Kennen">Kennen</option>
				<option value="Kha'Zix">Kha'Zix</option>
				<option value="Kog'Maw">Kog'Maw</option>
				<option value="">LeBlanc</option>
				<option value="LeBlanc">Lee Sin</option>
				<option value="Leona">Leona</option>
				<option value="Lissandra">Lissandra</option>
				<option value="Lucian">Lucian</option>
				<option value="Lulu">Lulu</option>
				<option value="Lux">Lux</option>
				<option value="Malphite">Malphite</option>
				<option value="Malzahar">Malzahar</option>
				<option value="Maokai">Maokai</option>
				<option value="Master Yi">Master Yi</option>
				<option value="Miss Fortune">Miss Fortune</option>
				<option value="Mordekaiser">Mordekaiser</option>
				<option value="Morgana">Morgana</option>
				<option value="Nami">Nami</option>
				<option value="Nasus">Nasus</option>
				<option value="Nautilus">Nautilus</option>
				<option value="Nidalee">Nidalee</option>
				<option value="Nocturne">Nocturne</option>
				<option value="Nunu">Nunu</option>
				<option value="Olaf">Olaf</option>
				<option value="Orianna">Orianna</option>
				<option value="Pantheon">Pantheon</option>
				<option value="Poppy">Poppy</option>
				<option value="Quinn">Quinn</option>
				<option value="Rammus">Rammus</option>
				<option value="Renekton">Renekton</option>
				<option value="Rengar">Rengar</option>
				<option value="Riven">Riven</option>
				<option value="Rumble">Rumble</option>
				<option value="Ryze">Ryze</option>
				<option value="Sejuani">Sejuani</option>
				<option value="Shaco">Shaco</option>
				<option value="Shen">Shen</option>
				<option value="Shyvana">Shyvana</option>
				<option value="">Singed</option>
				<option value="Singed">Sion</option>
				<option value="Sivir">Sivir</option>
				<option value="Skarner">Skarner</option>
				<option value="Sona">Sona</option>
				<option value="Soraka">Soraka</option>
				<option value="Swain">Swain</option>
				<option value="Syndra">Syndra</option>
				<option value="Talon">Talon</option>
				<option value="Taric">Taric</option>
				<option value="Teemo">Teemo</option>
				<option value="Thresh">Thresh</option>
				<option value="Tristana">Tristana</option>
				<option value="Trundle">Trundle</option>
				<option value="Tryndamere">Tryndamere</option>
				<option value="Twisted Fate">Twisted Fate</option>
				<option value="Twitch">Twitch</option>
				<option value="Udyr">Udyr</option>
				<option value="Urgot">Urgot</option>
				<option value="Varus">Varus</option>
				<option value="Vayne">Vayne</option>
				<option value="Veigar">Veigar</option>
				<option value="Vi">Vi</option>
				<option value="Viktor">Viktor</option>
				<option value="Vladimir">Vladimir</option>
				<option value="Volibear">Volibear</option>
				<option value="Warwick">Warwick</option>
				<option value="Wukong">Wukong</option>
				<option value="Xerath">Xerath</option>
				<option value="Xin Zhao">Xin Zhao</option>
				<option value="Yorick">Yorick</option>
				<option value="Zac">Zac</option>
				<option value="Zed">Zed</option>
				<option value="Ziggs">Ziggs</option>
				<option value="Zilean">Zilean</option>
				<option value="Zyra">Zyra</option>
			</select>
			</td>
			<td>
			<select name="champ_dropdown_4">
				<option value="Default">Select Champ</option>
				<option value="Aatrox">Aatrox</option>
				<option value="Ahri">Ahri</option>
				<option value="Akali">Akali</option>
				<option value="Alistar">Alistar</option>
				<option value="Amumu">Amumu</option>
				<option value="Anivia">Anivia</option>
				<option value="Annie">Annie</option>
				<option value="Ashe">Ashe</option>
				<option value="Blitzcrank">Blitzcrank</option>
				<option value="Brand">Brand</option>
				<option value="Caitlyn">Caitlyn</option>
				<option value="Cassiopeia">Cassiopeia</option>
				<option value="Cho'Gath">Cho'Gath</option>
				<option value="Corki">Corki</option>
				<option value="Darius">Darius</option>
				<option value="Diana">Diana</option>
				<option value="Dr. Mundo">Dr. Mundo</option>
				<option value="Draven">Draven</option>
				<option value="Elise">Elise</option>
				<option value="Evelynn">Evelynn</option>
				<option value="Ezreal">Ezreal</option>
				<option value="Fiddlesticks">Fiddlesticks</option>
				<option value="Fiora">Fiora</option>
				<option value="Fizz">Fizz</option>
				<option value="Galio">Galio</option>
				<option value="Gangplank">Gangplank</option>
				<option value="Garen">Garen</option>
				<option value="Gragas">Gragas</option>
				<option value="Graves">Graves</option>
				<option value="Hecarim">Hecarim</option>
				<option value="Heimerdinger">Heimerdinger</option>
				<option value="Irelia">Irelia</option>
				<option value="Janna">Janna</option>
				<option value="Jarvan IV">Jarvan IV</option>
				<option value="Jax">Jax</option>
				<option value="Jayce">Jayce</option>
				<option value="Jinx">Jinx</option>
				<option value="Karma">Karma</option>
				<option value="Karthus">Karthus</option>
				<option value="Kassadin">Kassadin</option>
				<option value="Katarina">Katarina</option>
				<option value="Kayle">Kayle</option>
				<option value="Kennen">Kennen</option>
				<option value="Kha'Zix">Kha'Zix</option>
				<option value="Kog'Maw">Kog'Maw</option>
				<option value="">LeBlanc</option>
				<option value="LeBlanc">Lee Sin</option>
				<option value="Leona">Leona</option>
				<option value="Lissandra">Lissandra</option>
				<option value="Lucian">Lucian</option>
				<option value="Lulu">Lulu</option>
				<option value="Lux">Lux</option>
				<option value="Malphite">Malphite</option>
				<option value="Malzahar">Malzahar</option>
				<option value="Maokai">Maokai</option>
				<option value="Master Yi">Master Yi</option>
				<option value="Miss Fortune">Miss Fortune</option>
				<option value="Mordekaiser">Mordekaiser</option>
				<option value="Morgana">Morgana</option>
				<option value="Nami">Nami</option>
				<option value="Nasus">Nasus</option>
				<option value="Nautilus">Nautilus</option>
				<option value="Nidalee">Nidalee</option>
				<option value="Nocturne">Nocturne</option>
				<option value="Nunu">Nunu</option>
				<option value="Olaf">Olaf</option>
				<option value="Orianna">Orianna</option>
				<option value="Pantheon">Pantheon</option>
				<option value="Poppy">Poppy</option>
				<option value="Quinn">Quinn</option>
				<option value="Rammus">Rammus</option>
				<option value="Renekton">Renekton</option>
				<option value="Rengar">Rengar</option>
				<option value="Riven">Riven</option>
				<option value="Rumble">Rumble</option>
				<option value="Ryze">Ryze</option>
				<option value="Sejuani">Sejuani</option>
				<option value="Shaco">Shaco</option>
				<option value="Shen">Shen</option>
				<option value="Shyvana">Shyvana</option>
				<option value="">Singed</option>
				<option value="Singed">Sion</option>
				<option value="Sivir">Sivir</option>
				<option value="Skarner">Skarner</option>
				<option value="Sona">Sona</option>
				<option value="Soraka">Soraka</option>
				<option value="Swain">Swain</option>
				<option value="Syndra">Syndra</option>
				<option value="Talon">Talon</option>
				<option value="Taric">Taric</option>
				<option value="Teemo">Teemo</option>
				<option value="Thresh">Thresh</option>
				<option value="Tristana">Tristana</option>
				<option value="Trundle">Trundle</option>
				<option value="Tryndamere">Tryndamere</option>
				<option value="Twisted Fate">Twisted Fate</option>
				<option value="Twitch">Twitch</option>
				<option value="Udyr">Udyr</option>
				<option value="Urgot">Urgot</option>
				<option value="Varus">Varus</option>
				<option value="Vayne">Vayne</option>
				<option value="Veigar">Veigar</option>
				<option value="Vi">Vi</option>
				<option value="Viktor">Viktor</option>
				<option value="Vladimir">Vladimir</option>
				<option value="Volibear">Volibear</option>
				<option value="Warwick">Warwick</option>
				<option value="Wukong">Wukong</option>
				<option value="Xerath">Xerath</option>
				<option value="Xin Zhao">Xin Zhao</option>
				<option value="Yorick">Yorick</option>
				<option value="Zac">Zac</option>
				<option value="Zed">Zed</option>
				<option value="Ziggs">Ziggs</option>
				<option value="Zilean">Zilean</option>
				<option value="Zyra">Zyra</option>
			</select>
			</td>
			<td>
			<select name="champ_dropdown_5">
				<option value="Default">Select Champ</option>
				<option value="Aatrox">Aatrox</option>
				<option value="Ahri">Ahri</option>
				<option value="Akali">Akali</option>
				<option value="Alistar">Alistar</option>
				<option value="Amumu">Amumu</option>
				<option value="Anivia">Anivia</option>
				<option value="Annie">Annie</option>
				<option value="Ashe">Ashe</option>
				<option value="Blitzcrank">Blitzcrank</option>
				<option value="Brand">Brand</option>
				<option value="Caitlyn">Caitlyn</option>
				<option value="Cassiopeia">Cassiopeia</option>
				<option value="Cho'Gath">Cho'Gath</option>
				<option value="Corki">Corki</option>
				<option value="Darius">Darius</option>
				<option value="Diana">Diana</option>
				<option value="Dr. Mundo">Dr. Mundo</option>
				<option value="Draven">Draven</option>
				<option value="Elise">Elise</option>
				<option value="Evelynn">Evelynn</option>
				<option value="Ezreal">Ezreal</option>
				<option value="Fiddlesticks">Fiddlesticks</option>
				<option value="Fiora">Fiora</option>
				<option value="Fizz">Fizz</option>
				<option value="Galio">Galio</option>
				<option value="Gangplank">Gangplank</option>
				<option value="Garen">Garen</option>
				<option value="Gragas">Gragas</option>
				<option value="Graves">Graves</option>
				<option value="Hecarim">Hecarim</option>
				<option value="Heimerdinger">Heimerdinger</option>
				<option value="Irelia">Irelia</option>
				<option value="Janna">Janna</option>
				<option value="Jarvan IV">Jarvan IV</option>
				<option value="Jax">Jax</option>
				<option value="Jayce">Jayce</option>
				<option value="Jinx">Jinx</option>
				<option value="Karma">Karma</option>
				<option value="Karthus">Karthus</option>
				<option value="Kassadin">Kassadin</option>
				<option value="Katarina">Katarina</option>
				<option value="Kayle">Kayle</option>
				<option value="Kennen">Kennen</option>
				<option value="Kha'Zix">Kha'Zix</option>
				<option value="Kog'Maw">Kog'Maw</option>
				<option value="">LeBlanc</option>
				<option value="LeBlanc">Lee Sin</option>
				<option value="Leona">Leona</option>
				<option value="Lissandra">Lissandra</option>
				<option value="Lucian">Lucian</option>
				<option value="Lulu">Lulu</option>
				<option value="Lux">Lux</option>
				<option value="Malphite">Malphite</option>
				<option value="Malzahar">Malzahar</option>
				<option value="Maokai">Maokai</option>
				<option value="Master Yi">Master Yi</option>
				<option value="Miss Fortune">Miss Fortune</option>
				<option value="Mordekaiser">Mordekaiser</option>
				<option value="Morgana">Morgana</option>
				<option value="Nami">Nami</option>
				<option value="Nasus">Nasus</option>
				<option value="Nautilus">Nautilus</option>
				<option value="Nidalee">Nidalee</option>
				<option value="Nocturne">Nocturne</option>
				<option value="Nunu">Nunu</option>
				<option value="Olaf">Olaf</option>
				<option value="Orianna">Orianna</option>
				<option value="Pantheon">Pantheon</option>
				<option value="Poppy">Poppy</option>
				<option value="Quinn">Quinn</option>
				<option value="Rammus">Rammus</option>
				<option value="Renekton">Renekton</option>
				<option value="Rengar">Rengar</option>
				<option value="Riven">Riven</option>
				<option value="Rumble">Rumble</option>
				<option value="Ryze">Ryze</option>
				<option value="Sejuani">Sejuani</option>
				<option value="Shaco">Shaco</option>
				<option value="Shen">Shen</option>
				<option value="Shyvana">Shyvana</option>
				<option value="">Singed</option>
				<option value="Singed">Sion</option>
				<option value="Sivir">Sivir</option>
				<option value="Skarner">Skarner</option>
				<option value="Sona">Sona</option>
				<option value="Soraka">Soraka</option>
				<option value="Swain">Swain</option>
				<option value="Syndra">Syndra</option>
				<option value="Talon">Talon</option>
				<option value="Taric">Taric</option>
				<option value="Teemo">Teemo</option>
				<option value="Thresh">Thresh</option>
				<option value="Tristana">Tristana</option>
				<option value="Trundle">Trundle</option>
				<option value="Tryndamere">Tryndamere</option>
				<option value="Twisted Fate">Twisted Fate</option>
				<option value="Twitch">Twitch</option>
				<option value="Udyr">Udyr</option>
				<option value="Urgot">Urgot</option>
				<option value="Varus">Varus</option>
				<option value="Vayne">Vayne</option>
				<option value="Veigar">Veigar</option>
				<option value="Vi">Vi</option>
				<option value="Viktor">Viktor</option>
				<option value="Vladimir">Vladimir</option>
				<option value="Volibear">Volibear</option>
				<option value="Warwick">Warwick</option>
				<option value="Wukong">Wukong</option>
				<option value="Xerath">Xerath</option>
				<option value="Xin Zhao">Xin Zhao</option>
				<option value="Yorick">Yorick</option>
				<option value="Zac">Zac</option>
				<option value="Zed">Zed</option>
				<option value="Ziggs">Ziggs</option>
				<option value="Zilean">Zilean</option>
				<option value="Zyra">Zyra</option>
			</select>
			</td>
		</tr>
		<tr><!--Row 2-->
			<td>Did they call specific roles?</td>
			<td>
				<select name="position_dropdown_1">
					<option value="none">None</option>
					<option value="Top">Top</option>
					<option value="Middle">Middle</option>
					<option value="Carry">AD Carry</option>
					<option value="Support">Support</option>
					<option value="Jungle">Jungle</option>
				</select>
			</td>
			<td>
				<select name="position_dropdown_2">
					<option value="none">None</option>
					<option value="Top">Top</option>
					<option value="Middle">Middle</option>
					<option value="Carry">AD Carry</option>
					<option value="Support">Support</option>
					<option value="Jungle">Jungle</option>
				</select>
			</td>
			<td>
				<select name="position_dropdown_3">
					<option value="none">None</option>
					<option value="Top">Top</option>
					<option value="Middle">Middle</option>
					<option value="Carry">AD Carry</option>
					<option value="Support">Support</option>
					<option value="Jungle">Jungle</option>
				</select>
			</td>
			<td>
				<select name="position_dropdown_4">
					<option value="none">None</option>
					<option value="Top">Top</option>
					<option value="Middle">Middle</option>
					<option value="Carry">AD Carry</option>
					<option value="Support">Support</option>
					<option value="Jungle">Jungle</option>
				</select>
			</td>
			<td>
				<select name="position_dropdown_5">
					<option value="none">None</option>
					<option value="Top">Top</option>
					<option value="Middle">Middle</option>
					<option value="Carry">AD Carry</option>
					<option value="Support">Support</option>
					<option value="Jungle">Jungle</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<h2>I want champs that: </h2>
			</td>
		</tr>
		<tr><!--Row 3-->
			<td>
				Have hard CC <br>
				Are Easy to Play <br>
				Work well with my team <br>
			</td>
			<td>
				<input type="checkbox" name="check_list[]" value="value 1"> <br>
				<input type="checkbox" name="check_list[]" value="value 1"> <br>
				<input type="checkbox" name="check_list[]" value="value 1"> <br>
			</td>
		</tr>
		<tr><!--Row 4-->
			<td>
				<input type="submit" value="What champion should I play?">
			</td>
		</tr>
	</table>
</form>

<table>
	<tr>
		<td>
			<h3>Details</h3>
		</td>
		<td>
			<h3>Results</h3>
		</td>
	</tr>
	<tr>
		<td>
			<iframe width="500" height="200" name="detailsFrame" frameborder="1"></iframe>
		</td>
		<td>
			<iframe width="500" height="200" name="resultsFrame" frameborder="1"></iframe>
		</td>
	</tr>
</table>


</body>
</html>