notification :notifu, :nosound => true
#guard 'sass', :input => 'app/assets/sass', :output => 'public/assets/stylesheets'
#, :style => :compressed
group :development do
  if File.exists?("./config.rb")
    # Compile on start.
    puts `compass compile --time --quiet`
    # https://github.com/guard/guard-compass
    guard :compass do
      watch(%r{(.*)\.s[ac]ss$})
    end
  end
end

guard 'coffeescript', :input => 'app/assets/coffee', :output => 'public/assets/javascripts'

#group :development do
#  gem 'guard-livereload', require: false
#end

#guard 'livereload' do
  #watch(%r{app/views/.+\.(erb|haml|slim)$})
  #watch(%r{app/helpers/.+\.rb})
  #watch(%r{public/.+\.(css|js|html)})
  #watch(%r{config/locales/.+\.yml})
  # Rails Assets Pipeline
  #watch(%r{(app|vendor)(/assets/\w+/(.+\.(css|js|html|png|jpg))).*}) { |m| "/assets/#{m[3]}" }
#end
