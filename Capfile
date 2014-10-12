require 'recap/recipes/static'

set :deploy_to, "/var/config"
server 'www.nonmadden.com', :app
set :user, 'root'
set :application, "config"
set :application_user, 'root'
set :repository,  "https://github.com/arnononline/nonmadden.git"

after 'deploy', 'deploy:reload'

namespace :deploy do
  task :reload, roule: :app do
    run "sudo nginx -t"
    run 'sudo service nginx reload'
  end
end
