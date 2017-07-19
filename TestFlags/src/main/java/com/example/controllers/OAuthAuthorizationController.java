/*
 * TestFlags
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */
package com.example.controllers;

import java.io.*;
import java.util.*;
import java.util.concurrent.*;
import com.fasterxml.jackson.core.type.TypeReference;

import com.example.*;
import com.example.models.*;
import com.example.exceptions.*;
import com.example.http.client.HttpClient;
import com.example.http.client.HttpContext;
import com.example.http.request.HttpRequest;
import com.example.http.response.HttpResponse;
import com.example.http.response.HttpStringResponse;
import com.example.http.client.APICallBack;

public class OAuthAuthorizationController extends BaseController {    
    //private static variables for the singleton pattern
    private static Object syncObject = new Object();
    private static OAuthAuthorizationController instance = null;

    /**
     * Singleton pattern implementation 
     * @return The singleton instance of the OAuthAuthorizationController class 
     */
    public static OAuthAuthorizationController getInstance() {
        synchronized (syncObject) {
            if (null == instance) {
                instance = new OAuthAuthorizationController();
            }
        }
        return instance;
    }

    /**
     * Create a new OAuth 2 token.
     * @param    CreateRequestTokenInput    Object containing request parameters
     * @param    fieldParameters    Additional optional form parameters are supported by this endpoint
     * @return    Returns the void response from the API call 
     */
    public void createRequestTokenAsync(
                final CreateRequestTokenInput input,
                Map<String, Object> fieldParameters,
                final APICallBack<OAuthTokenModel> callBack
    ) {
        //validating required parameters
        if (null == input.getAuthorization())
            throw new NullPointerException("The property \"Authorization\" in the input object cannot be null.");

        if (null == input.getCode())
            throw new NullPointerException("The property \"Code\" in the input object cannot be null.");

        if (null == input.getRedirectUri())
            throw new NullPointerException("The property \"RedirectUri\" in the input object cannot be null.");

        //the base uri for api requests
        String _baseUri = Configuration.baseUri;
        
        //prepare query string for API call
        StringBuilder _queryBuilder = new StringBuilder(_baseUri);
        _queryBuilder.append("/sd");
        //validate and preprocess url
        String _queryUrl = APIHelper.cleanUrl(_queryBuilder);

        //load all headers for the outgoing API request
        Map<String, String> _headers = new HashMap<String, String>() {
            private static final long serialVersionUID = 5321826363329757285L;
            {
                    put( "user-agent", "APIMATIC 2.0" );
                    put( "accept", "application/json" );
                    put( "Authorization", input.getAuthorization() );
                    put( "new", Configuration.mnew );
                    put( "N8888&&&&&&!!!!@@@@R#&&*^&*^&*^E*&WV GVFGF", Configuration.n8888REWVGVFGF );
            }
        };

        //load all fields for the outgoing API request
        Map<String, Object> _parameters = new HashMap<String, Object>() {
            private static final long serialVersionUID = 4823685612992846052L;
            {
                    put( "grant_type", "authorization_code" );
                    put( "code", input.getCode() );
                    put( "redirect_uri", input.getRedirectUri() );
            }
        };
        _parameters.putAll( fieldParameters );

        //prepare and invoke the API call request to fetch the response
        final HttpRequest _request = getClientInstance().post(_queryUrl, _headers, APIHelper.prepareFormFields(_parameters));

        //invoke the callback before request if its not null
        if (getHttpCallBack() != null)
        {
            getHttpCallBack().OnBeforeRequest(_request);
        }

        //invoke request and get response
        Runnable _responseTask = new Runnable() {
            public void run() {
                //make the API call
                getClientInstance().executeAsStringAsync(_request, new APICallBack<HttpResponse>() {
                    public void onSuccess(HttpContext _context, HttpResponse _response) {
                        try {

                            //invoke the callback after response if its not null
                            if (getHttpCallBack() != null)	
                            {
                                getHttpCallBack().OnAfterResponse(_context);
                            }

                            //Error handling using HTTP status codes
                            int _responseCode = _response.getStatusCode();
                            if (_responseCode == 400)
                                throw new OAuthProviderException("OAuth 2 provider returned an error.", _context);

                            if (_responseCode == 401)
                                throw new OAuthProviderException("OAuth 2 provider says client authentication failed.", _context);

                            //handle errors defined at the API level
                            validateResponse(_response, _context);

                            //extract result from the http response
                            String _responseBody = ((HttpStringResponse)_response).getBody();
                            OAuthTokenModel _result = APIHelper.deserialize(_responseBody,
                                                        new TypeReference<OAuthTokenModel>(){});

                            //let the caller know of the success
                            callBack.onSuccess(_context, _result);
                        } catch (APIException error) {
                            //let the caller know of the error
                            callBack.onFailure(_context, error);
                        } catch (IOException ioException) {
                            //let the caller know of the caught IO Exception
                            callBack.onFailure(_context, ioException);
                        } catch (Exception exception) {
                            //let the caller know of the caught Exception
                            callBack.onFailure(_context, exception);
                        }
                    }
                    public void onFailure(HttpContext _context, Throwable _error) {
                        //invoke the callback after response if its not null
                        if (getHttpCallBack() != null)	
                            {
                            getHttpCallBack().OnAfterResponse(_context);
                        }

                        //let the caller know of the failure
                        callBack.onFailure(_context, _error);
                    }
                });
            }
        };

        //execute async using thread pool
        APIHelper.getScheduler().execute(_responseTask);
    }

    /**
     * Obtain a new access token using a refresh token
     * @param    CreateRefreshTokenInput    Object containing request parameters
     * @param    fieldParameters    Additional optional form parameters are supported by this endpoint
     * @return    Returns the void response from the API call 
     */
    public void createRefreshTokenAsync(
                final CreateRefreshTokenInput input,
                Map<String, Object> fieldParameters,
                final APICallBack<OAuthTokenModel> callBack
    ) {
        //validating required parameters
        if (null == input.getAuthorization())
            throw new NullPointerException("The property \"Authorization\" in the input object cannot be null.");

        if (null == input.getRefreshToken())
            throw new NullPointerException("The property \"RefreshToken\" in the input object cannot be null.");

        //the base uri for api requests
        String _baseUri = Configuration.baseUri;
        
        //prepare query string for API call
        StringBuilder _queryBuilder = new StringBuilder(_baseUri);
        _queryBuilder.append("/sd");
        //validate and preprocess url
        String _queryUrl = APIHelper.cleanUrl(_queryBuilder);

        //load all headers for the outgoing API request
        Map<String, String> _headers = new HashMap<String, String>() {
            private static final long serialVersionUID = 5065667989300263801L;
            {
                    put( "user-agent", "APIMATIC 2.0" );
                    put( "accept", "application/json" );
                    put( "Authorization", input.getAuthorization() );
                    put( "new", Configuration.mnew );
                    put( "N8888&&&&&&!!!!@@@@R#&&*^&*^&*^E*&WV GVFGF", Configuration.n8888REWVGVFGF );
            }
        };

        //load all fields for the outgoing API request
        Map<String, Object> _parameters = new HashMap<String, Object>() {
            private static final long serialVersionUID = 4909398006518869192L;
            {
                    put( "grant_type", "refresh_token" );
                    put( "refresh_token", input.getRefreshToken() );
                    put( "scope", input.getScope() );
            }
        };
        _parameters.putAll( fieldParameters );

        //prepare and invoke the API call request to fetch the response
        final HttpRequest _request = getClientInstance().post(_queryUrl, _headers, APIHelper.prepareFormFields(_parameters));

        //invoke the callback before request if its not null
        if (getHttpCallBack() != null)
        {
            getHttpCallBack().OnBeforeRequest(_request);
        }

        //invoke request and get response
        Runnable _responseTask = new Runnable() {
            public void run() {
                //make the API call
                getClientInstance().executeAsStringAsync(_request, new APICallBack<HttpResponse>() {
                    public void onSuccess(HttpContext _context, HttpResponse _response) {
                        try {

                            //invoke the callback after response if its not null
                            if (getHttpCallBack() != null)	
                            {
                                getHttpCallBack().OnAfterResponse(_context);
                            }

                            //Error handling using HTTP status codes
                            int _responseCode = _response.getStatusCode();
                            if (_responseCode == 400)
                                throw new OAuthProviderException("OAuth 2 provider returned an error.", _context);

                            if (_responseCode == 401)
                                throw new OAuthProviderException("OAuth 2 provider says client authentication failed.", _context);

                            //handle errors defined at the API level
                            validateResponse(_response, _context);

                            //extract result from the http response
                            String _responseBody = ((HttpStringResponse)_response).getBody();
                            OAuthTokenModel _result = APIHelper.deserialize(_responseBody,
                                                        new TypeReference<OAuthTokenModel>(){});

                            //let the caller know of the success
                            callBack.onSuccess(_context, _result);
                        } catch (APIException error) {
                            //let the caller know of the error
                            callBack.onFailure(_context, error);
                        } catch (IOException ioException) {
                            //let the caller know of the caught IO Exception
                            callBack.onFailure(_context, ioException);
                        } catch (Exception exception) {
                            //let the caller know of the caught Exception
                            callBack.onFailure(_context, exception);
                        }
                    }
                    public void onFailure(HttpContext _context, Throwable _error) {
                        //invoke the callback after response if its not null
                        if (getHttpCallBack() != null)	
                            {
                            getHttpCallBack().OnAfterResponse(_context);
                        }

                        //let the caller know of the failure
                        callBack.onFailure(_context, _error);
                    }
                });
            }
        };

        //execute async using thread pool
        APIHelper.getScheduler().execute(_responseTask);
    }

}