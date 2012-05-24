watch("stylesheets\/less\/.*\.less$") do |f|
	file = File.basename(f[0], '.*')
	system("lessc #{f[0]} > stylesheets/compiled/#{file}.css")
	system("growlnotify -m 'Compiled LESS file #{f[0]}!' --image ~/Pictures/jp_avatar.jpg --t 'Missional Digerati'")
end