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
    public partial class HeaderController: BaseController, IHeaderController
    {
        #region Singleton Pattern

        //private static variables for the singleton pattern
        private static object syncObject = new object();
        private static HeaderController instance = null;

        /// <summary>
        /// Singleton pattern implementation
        /// </summary>
        internal static HeaderController Instance
        {
            get
            {
                lock (syncObject)
                {
                    if (null == instance)
                    {
                        instance = new HeaderController();
                    }
                }
                return instance;
            }
        }

        #endregion Singleton Pattern

        /// <summary>
        /// Sends a single header params
        /// </summary>
        /// <param name="customHeader">Required parameter: Example: </param>
        /// <param name="mvalue">Required parameter: Represents the value of the custom header</param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public Models.ServerResponseModel CreateSendHeaders(string customHeader, string mvalue)
        {
            Task<Models.ServerResponseModel> t = CreateSendHeadersAsync(customHeader, mvalue);
            APIHelper.RunTaskSynchronously(t);
            return t.Result;
        }

        /// <summary>
        /// Sends a single header params
        /// </summary>
        /// <param name="customHeader">Required parameter: Example: </param>
        /// <param name="mvalue">Required parameter: Represents the value of the custom header</param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public async Task<Models.ServerResponseModel> CreateSendHeadersAsync(string customHeader, string mvalue)
        {
            //validating required parameters
            if (null == customHeader)
                throw new ArgumentNullException("customHeader", "The parameter \"customHeader\" is a required parameter and cannot be null.");

            if (null == mvalue)
                throw new ArgumentNullException("mvalue", "The parameter \"mvalue\" is a required parameter and cannot be null.");

            //the base uri for api requests
            string _baseUri = Configuration.GetBaseURI();

            //prepare query string for API call
            StringBuilder _queryBuilder = new StringBuilder(_baseUri);
            _queryBuilder.Append("/header");


            //validate and preprocess url
            string _queryUrl = APIHelper.CleanUrl(_queryBuilder);

            //append request with appropriate headers and parameters
            var _headers = new Dictionary<string,string>()
            {
                { "user-agent", "Stamplay SDK" },
                { "accept", "application/json" },
                { "custom-header", customHeader }
            };

            //append form/field parameters
            var _fields = new List<KeyValuePair<string, Object>>()
            {
                new KeyValuePair<string, object>( "value", mvalue )
            };
            //remove null parameters
            _fields = _fields.Where(kvp => kvp.Value != null).ToList();

            //prepare the API call request to fetch the response
            HttpRequest _request = ClientInstance.Post(_queryUrl, _headers, _fields);

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
                return APIHelper.JsonDeserialize<Models.ServerResponseModel>(_response.Body);
            }
            catch (Exception _ex)
            {
                throw new APIException("Failed to parse the response: " + _ex.Message, _context);
            }
        }

    }
} 