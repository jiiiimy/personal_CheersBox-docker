FROM nginx:latest
VOLUME default.conf /opt/nginx.conf
# CMD sed -e "s/ENV_PORT/$PORT/g" default.conf.temp > /tmp/nginx.conf && \
# 	nginx -c /tmp/nginx.conf -g "daemon off;"