def compile_less(full_path_file, file)
	system("lessc #{full_path_file} > stylesheets/compiled/#{file}.css")
	system("growlnotify -m 'Compiled LESS file #{full_path_file}!' --image ~/Pictures/jp_avatar.jpg --t 'Missional Digerati'")
	puts "Compiled LESS file #{full_path_file}!"
end

watch("stylesheets\/less\/.*\.less$") do |f|
	file = File.basename(f[0], '.*')
	if file.include?('additional_variables')
		Dir.glob('stylesheets/less/*.less') do |less_full_path_file|
			less_file = File.basename(less_full_path_file, '.*')
		  compile_less(less_full_path_file, less_file) unless less_file.include?('additional_variables')
		end
	else
		compile_less(f[0], file)
	end
end