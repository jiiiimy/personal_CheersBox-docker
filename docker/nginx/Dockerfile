FROM nginx:latest
COPY default.conf /opt/nginx.conf.temp
CMD sed -e "s/ENV_PORT/$PORT/g" nginx.conf.temp > /tmp/nginx.conf && \
	nginx -c /tmp/nginx.conf -g "daemon off;"