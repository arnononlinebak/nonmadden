require 'recap/recipes/static'

set :deploy_to, "/var/config"
server 'www.nonmadden.com', :app
set :user, 'root'
set :application, "config"
set :application_user, 'root'
set :repository,  "https://github.com/arnononline/ohmpieng.git"

after 'deploy', 'deploy:reload'

namespace :deploy do
  task :reload, role: :app do
    run "sudo nginx -t"
    run 'sudo service nginx reload'
  end

  task :setup, role: :app do
  	run "sudo mkdir -p /var/config/"
    run "git init /var/config/"
    # run "git remote add origin https://arnononline:f537b1ff0bd7298dee49257f4c8de1191207d8b8@github.com/arnononline/nonmadden.git"
  end

  task :start, role: :app do
    run "sudo service nginx start"
  end
end
