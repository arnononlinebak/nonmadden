require 'recap/recipes/static'

set :deploy_to, "/var/config"
server 'www.nonmadden.com', :app
set :user, 'root'
set :application, "config"
set :application_user, 'root'
set :repository,  "https://nonmadden:Arnon007@github.com/nonmadden/nonmadden.git"

after 'deploy', 'deploy:reload'

namespace :deploy do
  task :reload, role: :app do
    run "sudo nginx -t"
    run 'sudo service nginx reload'
  end

  task :setup, role: :app do
  	run "sudo mkdir -p /var/config/"
    run "git init /var/config/"
    run "sudo ln -s /var/config/nonmadden /etc/nginx/sites-available/nonmadden"
  end

  task :start, role: :app do
    run "sudo service nginx start"
  end
end
