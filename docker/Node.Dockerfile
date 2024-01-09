FROM node:18.12.0 as build-stage

RUN npm install -g http-server

WORKDIR /var/www/vue-app

ENV PATH /var/www/vue-app/node_modules/ .bin:$PATH

COPY ./frontend/package*.json .

RUN npm install

RUN npm install @vue/cli@5.0.4 --location=global

COPY ./frontend/ .

RUN npm run build

FROM nginx as production-stage

COPY --from=build-stage /var/www/vue-app/dist /usr/share/nginx/html

EXPOSE 3000

CMD ["nginx", "-g", "daemon off;"]