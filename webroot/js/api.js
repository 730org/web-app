require('whatwg-fetch');
require('es6-promise').polyfill();

export default class {
    constructor(url, success, failure) {
        this.url = url;
        this.success = success;
        this.failure = failure;
    };

    get(data) {
        if (data) {
            this.url += '?' + Object.keys(data).map(function(k) {
                    return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
                }).join('&');
        }

        this.fetch('get');
    };

    post(data) {
        this.fetch('post', data);
    };

    put(data) {
        this.fetch('put', data);
    };

    delete() {
        this.fetch('delete');
    };

    fetch(method, data) {
        var headers = { 'Authorization': this.getAuthorizationHeader() };

        if (! (data instanceof FormData)) {
            headers['Accept'] = 'application/json';
            headers['Content-Type'] = 'application/json';

            data = JSON.stringify(data);
        }

        fetch(this.url, {
            headers: headers,
            method: method,
            body: data
        }).then((response) => {
            return this.checkStatus(response);
    }).then((response) => {
            return this.getJson(response);
    }).then((json) => {
            return this.returnData(json);
    }).catch((error) => {
            this.handleError(error);
    });
    };

    getAuthorizationHeader() {
        return 'Bearer ' + document.getElementById('').value;
    };

    checkStatus(response) {
        if (response.status < 200 || response.status > 299) {
            var error = new Error(response.statusText);
            error.response = response;
            throw error;
        }

        return response;
    };

    getJson(response) {
        if (response.statusText === 'No Content') {
            return { data: null };
        }

        return response.json();
    };

    returnData(json) {
        this.success(json.data);

        return json;
    };

    handleError(err) {
        console.error(err);

        this.failure(err);
    };
}