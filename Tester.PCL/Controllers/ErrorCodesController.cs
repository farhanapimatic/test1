/*
 * Tester.PCL
 *
 * This file was automatically generated for Stamplay by APIMATIC v2.0 ( https://apimatic.io )
 */
using System;
using System.Collections.Generic;
using System.Dynamic;
using System.Globalization;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Newtonsoft.Json.Converters;
using APIMATIC.SDK.Common;
using APIMATIC.SDK.Http.Request;
using APIMATIC.SDK.Http.Response;
using APIMATIC.SDK.Http.Client;
using Tester.PCL.Exceptions;
using Tester.PCL.Models;

namespace Tester.PCL.Controllers
{
    public partial class ErrorCodesController: BaseController, IErrorCodesController
    {
        #region Singleton Pattern

        //private static variables for the singleton pattern
        private static object syncObject = new object();
        private static ErrorCodesController instance = null;

        /// <summary>
        /// Singleton pattern implementation
        /// </summary>
        internal static ErrorCodesController Instance
        {
            get
            {
                lock (syncObject)
                {
                    if (null == instance)
                    {
                        instance = new ErrorCodesController();
                    }
                }
                return instance;
            }
        }

        #endregion Singleton Pattern

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the dynamic response from the API call</return>
        public dynamic Get401()
        {
            Task<dynamic> t = Get401Async();
            APIHelper.RunTaskSynchronously(t);
            return t.Result;
        }

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the dynamic response from the API call</return>
        public async Task<dynamic> Get401Async()
        {
            //the base uri for api requests
            string _baseUri = Configuration.GetBaseURI();

            //prepare query string for API call
            StringBuilder _queryBuilder = new StringBuilder(_baseUri);
            _queryBuilder.Append("/error/401");


            //validate and preprocess url
            string _queryUrl = APIHelper.CleanUrl(_queryBuilder);

            //append request with appropriate headers and parameters
            var _headers = new Dictionary<string,string>()
            {
                { "user-agent", "Stamplay SDK" },
                { "accept", "application/json" }
            };

            //prepare the API call request to fetch the response
            HttpRequest _request = ClientInstance.Get(_queryUrl,_headers);

            //invoke request and get response
            HttpStringResponse _response = (HttpStringResponse) await ClientInstance.ExecuteAsStringAsync(_request).ConfigureAwait(false);
            HttpContext _context = new HttpContext(_request,_response);

            //Error handling using HTTP status codes

            //return null on 404
            if (_response.StatusCode == 404)
                 return null;

            if (_response.StatusCode == 401)
                throw new LocalTestException(@"401 Local", _context);

            if (_response.StatusCode == 421)
                throw new LocalTestException(@"Default", _context);

            if (_response.StatusCode == 431)
                throw new LocalTestException(@"Default", _context);

            if (_response.StatusCode == 432)
                throw new LocalTestException(@"Default", _context);

            if (_response.StatusCode == 441)
                throw new LocalTestException(@"Default", _context);

            if ((_response.StatusCode < 200) || (_response.StatusCode > 208)) //[200,208] = HTTP OK
                throw new LocalTestException(@"Invalid response.", _context);

            //handle errors defined at the API level
            base.ValidateResponse(_response, _context);

            try
            {
                return APIHelper.JsonDeserialize<dynamic>(_response.Body);
            }
            catch (Exception _ex)
            {
                throw new APIException("Failed to parse the response: " + _ex.Message, _context);
            }
        }

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the dynamic response from the API call</return>
        public dynamic Get500()
        {
            Task<dynamic> t = Get500Async();
            APIHelper.RunTaskSynchronously(t);
            return t.Result;
        }

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the dynamic response from the API call</return>
        public async Task<dynamic> Get500Async()
        {
            //the base uri for api requests
            string _baseUri = Configuration.GetBaseURI();

            //prepare query string for API call
            StringBuilder _queryBuilder = new StringBuilder(_baseUri);
            _queryBuilder.Append("/error/500");


            //validate and preprocess url
            string _queryUrl = APIHelper.CleanUrl(_queryBuilder);

            //append request with appropriate headers and parameters
            var _headers = new Dictionary<string,string>()
            {
                { "user-agent", "Stamplay SDK" },
                { "accept", "application/json" }
            };

            //prepare the API call request to fetch the response
            HttpRequest _request = ClientInstance.Get(_queryUrl,_headers);

            //invoke request and get response
            HttpStringResponse _response = (HttpStringResponse) await ClientInstance.ExecuteAsStringAsync(_request).ConfigureAwait(false);
            HttpContext _context = new HttpContext(_request,_response);

            //return null on 404
            if (_response.StatusCode == 404)
                 return null;

            //handle errors defined at the API level
            base.ValidateResponse(_response, _context);

            try
            {
                return APIHelper.JsonDeserialize<dynamic>(_response.Body);
            }
            catch (Exception _ex)
            {
                throw new APIException("Failed to parse the response: " + _ex.Message, _context);
            }
        }

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the dynamic response from the API call</return>
        public dynamic Get400()
        {
            Task<dynamic> t = Get400Async();
            APIHelper.RunTaskSynchronously(t);
            return t.Result;
        }

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the dynamic response from the API call</return>
        public async Task<dynamic> Get400Async()
        {
            //the base uri for api requests
            string _baseUri = Configuration.GetBaseURI();

            //prepare query string for API call
            StringBuilder _queryBuilder = new StringBuilder(_baseUri);
            _queryBuilder.Append("/error/400");


            //validate and preprocess url
            string _queryUrl = APIHelper.CleanUrl(_queryBuilder);

            //append request with appropriate headers and parameters
            var _headers = new Dictionary<string,string>()
            {
                { "user-agent", "Stamplay SDK" },
                { "accept", "application/json" }
            };

            //prepare the API call request to fetch the response
            HttpRequest _request = ClientInstance.Get(_queryUrl,_headers);

            //invoke request and get response
            HttpStringResponse _response = (HttpStringResponse) await ClientInstance.ExecuteAsStringAsync(_request).ConfigureAwait(false);
            HttpContext _context = new HttpContext(_request,_response);

            //return null on 404
            if (_response.StatusCode == 404)
                 return null;

            //handle errors defined at the API level
            base.ValidateResponse(_response, _context);

            try
            {
                return APIHelper.JsonDeserialize<dynamic>(_response.Body);
            }
            catch (Exception _ex)
            {
                throw new APIException("Failed to parse the response: " + _ex.Message, _context);
            }
        }

    }
} 