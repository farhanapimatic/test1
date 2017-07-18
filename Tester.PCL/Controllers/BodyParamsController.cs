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
    public partial class BodyParamsController: BaseController, IBodyParamsController
    {
        #region Singleton Pattern

        //private static variables for the singleton pattern
        private static object syncObject = new object();
        private static BodyParamsController instance = null;

        /// <summary>
        /// Singleton pattern implementation
        /// </summary>
        internal static BodyParamsController Instance
        {
            get
            {
                lock (syncObject)
                {
                    if (null == instance)
                    {
                        instance = new BodyParamsController();
                    }
                }
                return instance;
            }
        }

        #endregion Singleton Pattern

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public Models.ServerResponseModel CreateSendRfc3339DateTime(DateTime datetime)
        {
            Task<Models.ServerResponseModel> t = CreateSendRfc3339DateTimeAsync(datetime);
            APIHelper.RunTaskSynchronously(t);
            return t.Result;
        }

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public async Task<Models.ServerResponseModel> CreateSendRfc3339DateTimeAsync(DateTime datetime)
        {
            //the base uri for api requests
            string _baseUri = Configuration.GetBaseURI();

            //prepare query string for API call
            StringBuilder _queryBuilder = new StringBuilder(_baseUri);
            _queryBuilder.Append("/body/rfc3339datetime");


            //validate and preprocess url
            string _queryUrl = APIHelper.CleanUrl(_queryBuilder);

            //append request with appropriate headers and parameters
            var _headers = new Dictionary<string,string>()
            {
                { "user-agent", "Stamplay SDK" },
                { "accept", "application/json" },
                { "content-type", "text/plain; charset=utf-8" }
            };

            //append body params
             var _body = datetime.ToString("yyyy'-'MM'-'dd'T'HH':'mm':'ss.FFFFFFFK");

            //prepare the API call request to fetch the response
            HttpRequest _request = ClientInstance.PostBody(_queryUrl, _headers, _body);

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

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public Models.ServerResponseModel CreateSendRfc1123DateTime(DateTime datetime)
        {
            Task<Models.ServerResponseModel> t = CreateSendRfc1123DateTimeAsync(datetime);
            APIHelper.RunTaskSynchronously(t);
            return t.Result;
        }

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public async Task<Models.ServerResponseModel> CreateSendRfc1123DateTimeAsync(DateTime datetime)
        {
            //the base uri for api requests
            string _baseUri = Configuration.GetBaseURI();

            //prepare query string for API call
            StringBuilder _queryBuilder = new StringBuilder(_baseUri);
            _queryBuilder.Append("/body/rfc1123datetime");


            //validate and preprocess url
            string _queryUrl = APIHelper.CleanUrl(_queryBuilder);

            //append request with appropriate headers and parameters
            var _headers = new Dictionary<string,string>()
            {
                { "user-agent", "Stamplay SDK" },
                { "accept", "application/json" },
                { "content-type", "text/plain; charset=utf-8" }
            };

            //append body params
             var _body = datetime.ToString("r");

            //prepare the API call request to fetch the response
            HttpRequest _request = ClientInstance.PostBody(_queryUrl, _headers, _body);

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

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public Models.ServerResponseModel CreateSendUnixDateTime(DateTime datetime)
        {
            Task<Models.ServerResponseModel> t = CreateSendUnixDateTimeAsync(datetime);
            APIHelper.RunTaskSynchronously(t);
            return t.Result;
        }

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public async Task<Models.ServerResponseModel> CreateSendUnixDateTimeAsync(DateTime datetime)
        {
            //the base uri for api requests
            string _baseUri = Configuration.GetBaseURI();

            //prepare query string for API call
            StringBuilder _queryBuilder = new StringBuilder(_baseUri);
            _queryBuilder.Append("/body/unixdatetime");


            //validate and preprocess url
            string _queryUrl = APIHelper.CleanUrl(_queryBuilder);

            //append request with appropriate headers and parameters
            var _headers = new Dictionary<string,string>()
            {
                { "user-agent", "Stamplay SDK" },
                { "accept", "application/json" },
                { "content-type", "text/plain; charset=utf-8" }
            };

            //append body params
             var _body = datetime.ToUniversalTime().Subtract(new DateTime(1970, 1, 1)).TotalSeconds.ToString();

            //prepare the API call request to fetch the response
            HttpRequest _request = ClientInstance.PostBody(_queryUrl, _headers, _body);

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

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="date">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public Models.ServerResponseModel CreateSendDate(DateTime date)
        {
            Task<Models.ServerResponseModel> t = CreateSendDateAsync(date);
            APIHelper.RunTaskSynchronously(t);
            return t.Result;
        }

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="date">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public async Task<Models.ServerResponseModel> CreateSendDateAsync(DateTime date)
        {
            //the base uri for api requests
            string _baseUri = Configuration.GetBaseURI();

            //prepare query string for API call
            StringBuilder _queryBuilder = new StringBuilder(_baseUri);
            _queryBuilder.Append("/body/date");


            //validate and preprocess url
            string _queryUrl = APIHelper.CleanUrl(_queryBuilder);

            //append request with appropriate headers and parameters
            var _headers = new Dictionary<string,string>()
            {
                { "user-agent", "Stamplay SDK" },
                { "accept", "application/json" },
                { "content-type", "text/plain; charset=utf-8" }
            };

            //append body params
             var _body = date.ToString("yyyy'-'MM'-'dd");

            //prepare the API call request to fetch the response
            HttpRequest _request = ClientInstance.PostBody(_queryUrl, _headers, _body);

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

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="mvalue">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public Models.ServerResponseModel CreateSendString(string mvalue)
        {
            Task<Models.ServerResponseModel> t = CreateSendStringAsync(mvalue);
            APIHelper.RunTaskSynchronously(t);
            return t.Result;
        }

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="mvalue">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public async Task<Models.ServerResponseModel> CreateSendStringAsync(string mvalue)
        {
            //validating required parameters
            if (null == mvalue)
                throw new ArgumentNullException("mvalue", "The parameter \"mvalue\" is a required parameter and cannot be null.");

            //the base uri for api requests
            string _baseUri = Configuration.GetBaseURI();

            //prepare query string for API call
            StringBuilder _queryBuilder = new StringBuilder(_baseUri);
            _queryBuilder.Append("/body/string");


            //validate and preprocess url
            string _queryUrl = APIHelper.CleanUrl(_queryBuilder);

            //append request with appropriate headers and parameters
            var _headers = new Dictionary<string,string>()
            {
                { "user-agent", "Stamplay SDK" },
                { "accept", "application/json" },
                { "content-type", "text/plain; charset=utf-8" }
            };

            //append body params
             var _body = mvalue;

            //prepare the API call request to fetch the response
            HttpRequest _request = ClientInstance.PostBody(_queryUrl, _headers, _body);

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

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="suites">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public Models.ServerResponseModel CreateSendIntegerEnumArray(List<Models.SuiteCodeEnum> suites)
        {
            Task<Models.ServerResponseModel> t = CreateSendIntegerEnumArrayAsync(suites);
            APIHelper.RunTaskSynchronously(t);
            return t.Result;
        }

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="suites">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public async Task<Models.ServerResponseModel> CreateSendIntegerEnumArrayAsync(List<Models.SuiteCodeEnum> suites)
        {
            //validating required parameters
            if (null == suites)
                throw new ArgumentNullException("suites", "The parameter \"suites\" is a required parameter and cannot be null.");

            //the base uri for api requests
            string _baseUri = Configuration.GetBaseURI();

            //prepare query string for API call
            StringBuilder _queryBuilder = new StringBuilder(_baseUri);
            _queryBuilder.Append("/body/integerenum");

            //process optional query parameters
            APIHelper.AppendUrlWithQueryParameters(_queryBuilder, new Dictionary<string, object>()
            {
                { "array", "true" }
            },ArrayDeserializationFormat,ParameterSeparator);


            //validate and preprocess url
            string _queryUrl = APIHelper.CleanUrl(_queryBuilder);

            //append request with appropriate headers and parameters
            var _headers = new Dictionary<string,string>()
            {
                { "user-agent", "Stamplay SDK" },
                { "accept", "application/json" },
                { "content-type", "application/json; charset=utf-8" }
            };

            //append body params
            var _body = APIHelper.JsonSerialize(suites);

            //prepare the API call request to fetch the response
            HttpRequest _request = ClientInstance.PostBody(_queryUrl, _headers, _body);

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

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="days">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public Models.ServerResponseModel CreateSendStringEnumArray(List<Models.DaysEnum> days)
        {
            Task<Models.ServerResponseModel> t = CreateSendStringEnumArrayAsync(days);
            APIHelper.RunTaskSynchronously(t);
            return t.Result;
        }

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="days">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public async Task<Models.ServerResponseModel> CreateSendStringEnumArrayAsync(List<Models.DaysEnum> days)
        {
            //validating required parameters
            if (null == days)
                throw new ArgumentNullException("days", "The parameter \"days\" is a required parameter and cannot be null.");

            //the base uri for api requests
            string _baseUri = Configuration.GetBaseURI();

            //prepare query string for API call
            StringBuilder _queryBuilder = new StringBuilder(_baseUri);
            _queryBuilder.Append("/body/stringenum");

            //process optional query parameters
            APIHelper.AppendUrlWithQueryParameters(_queryBuilder, new Dictionary<string, object>()
            {
                { "array", "true" }
            },ArrayDeserializationFormat,ParameterSeparator);


            //validate and preprocess url
            string _queryUrl = APIHelper.CleanUrl(_queryBuilder);

            //append request with appropriate headers and parameters
            var _headers = new Dictionary<string,string>()
            {
                { "user-agent", "Stamplay SDK" },
                { "accept", "application/json" },
                { "content-type", "application/json; charset=utf-8" }
            };

            //append body params
            var _body = APIHelper.JsonSerialize(days);

            //prepare the API call request to fetch the response
            HttpRequest _request = ClientInstance.PostBody(_queryUrl, _headers, _body);

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

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="models">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public Models.ServerResponseModel CreateSendModelArray(List<Models.EmployeeModel> models)
        {
            Task<Models.ServerResponseModel> t = CreateSendModelArrayAsync(models);
            APIHelper.RunTaskSynchronously(t);
            return t.Result;
        }

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="models">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public async Task<Models.ServerResponseModel> CreateSendModelArrayAsync(List<Models.EmployeeModel> models)
        {
            //validating required parameters
            if (null == models)
                throw new ArgumentNullException("models", "The parameter \"models\" is a required parameter and cannot be null.");

            //the base uri for api requests
            string _baseUri = Configuration.GetBaseURI();

            //prepare query string for API call
            StringBuilder _queryBuilder = new StringBuilder(_baseUri);
            _queryBuilder.Append("/body/model");

            //process optional query parameters
            APIHelper.AppendUrlWithQueryParameters(_queryBuilder, new Dictionary<string, object>()
            {
                { "array", "true" }
            },ArrayDeserializationFormat,ParameterSeparator);


            //validate and preprocess url
            string _queryUrl = APIHelper.CleanUrl(_queryBuilder);

            //append request with appropriate headers and parameters
            var _headers = new Dictionary<string,string>()
            {
                { "user-agent", "Stamplay SDK" },
                { "accept", "application/json" },
                { "content-type", "application/json; charset=utf-8" }
            };

            //append body params
            var _body = APIHelper.JsonSerialize(models);

            //prepare the API call request to fetch the response
            HttpRequest _request = ClientInstance.PostBody(_queryUrl, _headers, _body);

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

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="integers">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public Models.ServerResponseModel CreateSendIntegerArray(List<int> integers)
        {
            Task<Models.ServerResponseModel> t = CreateSendIntegerArrayAsync(integers);
            APIHelper.RunTaskSynchronously(t);
            return t.Result;
        }

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="integers">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public async Task<Models.ServerResponseModel> CreateSendIntegerArrayAsync(List<int> integers)
        {
            //validating required parameters
            if (null == integers)
                throw new ArgumentNullException("integers", "The parameter \"integers\" is a required parameter and cannot be null.");

            //the base uri for api requests
            string _baseUri = Configuration.GetBaseURI();

            //prepare query string for API call
            StringBuilder _queryBuilder = new StringBuilder(_baseUri);
            _queryBuilder.Append("/body/number");

            //process optional query parameters
            APIHelper.AppendUrlWithQueryParameters(_queryBuilder, new Dictionary<string, object>()
            {
                { "array", "true" }
            },ArrayDeserializationFormat,ParameterSeparator);


            //validate and preprocess url
            string _queryUrl = APIHelper.CleanUrl(_queryBuilder);

            //append request with appropriate headers and parameters
            var _headers = new Dictionary<string,string>()
            {
                { "user-agent", "Stamplay SDK" },
                { "accept", "application/json" },
                { "content-type", "application/json; charset=utf-8" }
            };

            //append body params
            var _body = APIHelper.JsonSerialize(integers);

            //prepare the API call request to fetch the response
            HttpRequest _request = ClientInstance.PostBody(_queryUrl, _headers, _body);

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

        /// <summary>
        /// sends a string body param
        /// </summary>
        /// <param name="sarray">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public Models.ServerResponseModel CreateSendStringArray(List<string> sarray)
        {
            Task<Models.ServerResponseModel> t = CreateSendStringArrayAsync(sarray);
            APIHelper.RunTaskSynchronously(t);
            return t.Result;
        }

        /// <summary>
        /// sends a string body param
        /// </summary>
        /// <param name="sarray">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public async Task<Models.ServerResponseModel> CreateSendStringArrayAsync(List<string> sarray)
        {
            //validating required parameters
            if (null == sarray)
                throw new ArgumentNullException("sarray", "The parameter \"sarray\" is a required parameter and cannot be null.");

            //the base uri for api requests
            string _baseUri = Configuration.GetBaseURI();

            //prepare query string for API call
            StringBuilder _queryBuilder = new StringBuilder(_baseUri);
            _queryBuilder.Append("/body/string");

            //process optional query parameters
            APIHelper.AppendUrlWithQueryParameters(_queryBuilder, new Dictionary<string, object>()
            {
                { "array", "true" }
            },ArrayDeserializationFormat,ParameterSeparator);


            //validate and preprocess url
            string _queryUrl = APIHelper.CleanUrl(_queryBuilder);

            //append request with appropriate headers and parameters
            var _headers = new Dictionary<string,string>()
            {
                { "user-agent", "Stamplay SDK" },
                { "accept", "application/json" },
                { "content-type", "application/json; charset=utf-8" }
            };

            //append body params
            var _body = APIHelper.JsonSerialize(sarray);

            //prepare the API call request to fetch the response
            HttpRequest _request = ClientInstance.PostBody(_queryUrl, _headers, _body);

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

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public Models.ServerResponseModel CreateSendRfc3339DateTimeArray(List<DateTime> datetimes)
        {
            Task<Models.ServerResponseModel> t = CreateSendRfc3339DateTimeArrayAsync(datetimes);
            APIHelper.RunTaskSynchronously(t);
            return t.Result;
        }

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public async Task<Models.ServerResponseModel> CreateSendRfc3339DateTimeArrayAsync(List<DateTime> datetimes)
        {
            //validating required parameters
            if (null == datetimes)
                throw new ArgumentNullException("datetimes", "The parameter \"datetimes\" is a required parameter and cannot be null.");

            //the base uri for api requests
            string _baseUri = Configuration.GetBaseURI();

            //prepare query string for API call
            StringBuilder _queryBuilder = new StringBuilder(_baseUri);
            _queryBuilder.Append("/body/rfc3339datetime");

            //process optional query parameters
            APIHelper.AppendUrlWithQueryParameters(_queryBuilder, new Dictionary<string, object>()
            {
                { "array", "true" }
            },ArrayDeserializationFormat,ParameterSeparator);


            //validate and preprocess url
            string _queryUrl = APIHelper.CleanUrl(_queryBuilder);

            //append request with appropriate headers and parameters
            var _headers = new Dictionary<string,string>()
            {
                { "user-agent", "Stamplay SDK" },
                { "accept", "application/json" },
                { "content-type", "application/json; charset=utf-8" }
            };

            //append body params
            var _body = APIHelper.JsonSerialize(datetimes, new IsoDateTimeConverter());

            //prepare the API call request to fetch the response
            HttpRequest _request = ClientInstance.PostBody(_queryUrl, _headers, _body);

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

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public Models.ServerResponseModel CreateSendRfc1123DateTimeArray(List<DateTime> datetimes)
        {
            Task<Models.ServerResponseModel> t = CreateSendRfc1123DateTimeArrayAsync(datetimes);
            APIHelper.RunTaskSynchronously(t);
            return t.Result;
        }

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public async Task<Models.ServerResponseModel> CreateSendRfc1123DateTimeArrayAsync(List<DateTime> datetimes)
        {
            //validating required parameters
            if (null == datetimes)
                throw new ArgumentNullException("datetimes", "The parameter \"datetimes\" is a required parameter and cannot be null.");

            //the base uri for api requests
            string _baseUri = Configuration.GetBaseURI();

            //prepare query string for API call
            StringBuilder _queryBuilder = new StringBuilder(_baseUri);
            _queryBuilder.Append("/body/rfc1123datetime");

            //process optional query parameters
            APIHelper.AppendUrlWithQueryParameters(_queryBuilder, new Dictionary<string, object>()
            {
                { "array", "true" }
            },ArrayDeserializationFormat,ParameterSeparator);


            //validate and preprocess url
            string _queryUrl = APIHelper.CleanUrl(_queryBuilder);

            //append request with appropriate headers and parameters
            var _headers = new Dictionary<string,string>()
            {
                { "user-agent", "Stamplay SDK" },
                { "accept", "application/json" },
                { "content-type", "application/json; charset=utf-8" }
            };

            //append body params
            var _body = APIHelper.JsonSerialize(datetimes, new CustomDateTimeConverter("r"));

            //prepare the API call request to fetch the response
            HttpRequest _request = ClientInstance.PostBody(_queryUrl, _headers, _body);

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

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public Models.ServerResponseModel CreateSendUnixDateTimeArray(List<DateTime> datetimes)
        {
            Task<Models.ServerResponseModel> t = CreateSendUnixDateTimeArrayAsync(datetimes);
            APIHelper.RunTaskSynchronously(t);
            return t.Result;
        }

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public async Task<Models.ServerResponseModel> CreateSendUnixDateTimeArrayAsync(List<DateTime> datetimes)
        {
            //validating required parameters
            if (null == datetimes)
                throw new ArgumentNullException("datetimes", "The parameter \"datetimes\" is a required parameter and cannot be null.");

            //the base uri for api requests
            string _baseUri = Configuration.GetBaseURI();

            //prepare query string for API call
            StringBuilder _queryBuilder = new StringBuilder(_baseUri);
            _queryBuilder.Append("/body/unixdatetime");

            //process optional query parameters
            APIHelper.AppendUrlWithQueryParameters(_queryBuilder, new Dictionary<string, object>()
            {
                { "array", "true" }
            },ArrayDeserializationFormat,ParameterSeparator);


            //validate and preprocess url
            string _queryUrl = APIHelper.CleanUrl(_queryBuilder);

            //append request with appropriate headers and parameters
            var _headers = new Dictionary<string,string>()
            {
                { "user-agent", "Stamplay SDK" },
                { "accept", "application/json" },
                { "content-type", "application/json; charset=utf-8" }
            };

            //append body params
            var _body = APIHelper.JsonSerialize(datetimes, new UnixDateTimeConverter());

            //prepare the API call request to fetch the response
            HttpRequest _request = ClientInstance.PostBody(_queryUrl, _headers, _body);

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

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="dates">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public Models.ServerResponseModel CreateSendDateArray(List<DateTime> dates)
        {
            Task<Models.ServerResponseModel> t = CreateSendDateArrayAsync(dates);
            APIHelper.RunTaskSynchronously(t);
            return t.Result;
        }

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="dates">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public async Task<Models.ServerResponseModel> CreateSendDateArrayAsync(List<DateTime> dates)
        {
            //validating required parameters
            if (null == dates)
                throw new ArgumentNullException("dates", "The parameter \"dates\" is a required parameter and cannot be null.");

            //the base uri for api requests
            string _baseUri = Configuration.GetBaseURI();

            //prepare query string for API call
            StringBuilder _queryBuilder = new StringBuilder(_baseUri);
            _queryBuilder.Append("/body/date");

            //process optional query parameters
            APIHelper.AppendUrlWithQueryParameters(_queryBuilder, new Dictionary<string, object>()
            {
                { "array", "true" }
            },ArrayDeserializationFormat,ParameterSeparator);


            //validate and preprocess url
            string _queryUrl = APIHelper.CleanUrl(_queryBuilder);

            //append request with appropriate headers and parameters
            var _headers = new Dictionary<string,string>()
            {
                { "user-agent", "Stamplay SDK" },
                { "accept", "application/json" },
                { "content-type", "application/json; charset=utf-8" }
            };

            //append body params
            var _body = APIHelper.JsonSerialize(dates, new CustomDateTimeConverter("yyyy'-'MM'-'dd"));

            //prepare the API call request to fetch the response
            HttpRequest _request = ClientInstance.PostBody(_queryUrl, _headers, _body);

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

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="mdynamic">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public Models.ServerResponseModel CreateSendDynamic(object mdynamic)
        {
            Task<Models.ServerResponseModel> t = CreateSendDynamicAsync(mdynamic);
            APIHelper.RunTaskSynchronously(t);
            return t.Result;
        }

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="mdynamic">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public async Task<Models.ServerResponseModel> CreateSendDynamicAsync(object mdynamic)
        {
            //validating required parameters
            if (null == mdynamic)
                throw new ArgumentNullException("mdynamic", "The parameter \"mdynamic\" is a required parameter and cannot be null.");

            //the base uri for api requests
            string _baseUri = Configuration.GetBaseURI();

            //prepare query string for API call
            StringBuilder _queryBuilder = new StringBuilder(_baseUri);
            _queryBuilder.Append("/body/dynamic");


            //validate and preprocess url
            string _queryUrl = APIHelper.CleanUrl(_queryBuilder);

            //append request with appropriate headers and parameters
            var _headers = new Dictionary<string,string>()
            {
                { "user-agent", "Stamplay SDK" },
                { "accept", "application/json" },
                { "content-type", "application/json; charset=utf-8" }
            };

            //append body params
            var _body = APIHelper.JsonSerialize(mdynamic);

            //prepare the API call request to fetch the response
            HttpRequest _request = ClientInstance.PostBody(_queryUrl, _headers, _body);

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

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="model">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public Models.ServerResponseModel CreateSendModel(Models.EmployeeModel model)
        {
            Task<Models.ServerResponseModel> t = CreateSendModelAsync(model);
            APIHelper.RunTaskSynchronously(t);
            return t.Result;
        }

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="model">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        public async Task<Models.ServerResponseModel> CreateSendModelAsync(Models.EmployeeModel model)
        {
            //validating required parameters
            if (null == model)
                throw new ArgumentNullException("model", "The parameter \"model\" is a required parameter and cannot be null.");

            //the base uri for api requests
            string _baseUri = Configuration.GetBaseURI();

            //prepare query string for API call
            StringBuilder _queryBuilder = new StringBuilder(_baseUri);
            _queryBuilder.Append("/body/model");


            //validate and preprocess url
            string _queryUrl = APIHelper.CleanUrl(_queryBuilder);

            //append request with appropriate headers and parameters
            var _headers = new Dictionary<string,string>()
            {
                { "user-agent", "Stamplay SDK" },
                { "accept", "application/json" },
                { "content-type", "application/json; charset=utf-8" }
            };

            //append body params
            var _body = APIHelper.JsonSerialize(model);

            //prepare the API call request to fetch the response
            HttpRequest _request = ClientInstance.PostBody(_queryUrl, _headers, _body);

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