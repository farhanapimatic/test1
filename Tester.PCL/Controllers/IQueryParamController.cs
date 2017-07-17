/*
 * Tester.PCL
 *
 * This file was automatically generated for Stamplay by APIMATIC v2.0 ( https://apimatic.io )
 */
using System;
using System.Collections.Generic;
using System.Dynamic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using APIMATIC.SDK.Common;
using APIMATIC.SDK.Http.Request;
using APIMATIC.SDK.Http.Response;
using APIMATIC.SDK.Http.Client;
using Tester.PCL.Models;

namespace Tester.PCL.Controllers
{
    public partial interface IQueryParamController
    {
        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="mstring">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse StringParam(string mstring);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="mstring">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> StringParamAsync(string mstring);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse Rfc3339DateTime(DateTime datetime);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> Rfc3339DateTimeAsync(DateTime datetime);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="number">Required parameter: Example: </param>
        /// <param name="precision">Required parameter: Example: </param>
        /// <param name="mstring">Required parameter: Example: </param>
        /// <param name="url">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse MultipleParams(
                int number,
                double precision,
                string mstring,
                string url);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="number">Required parameter: Example: </param>
        /// <param name="precision">Required parameter: Example: </param>
        /// <param name="mstring">Required parameter: Example: </param>
        /// <param name="url">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> MultipleParamsAsync(
                int number,
                double precision,
                string mstring,
                string url);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="boolean">Required parameter: Example: </param>
        /// <param name="number">Required parameter: Example: </param>
        /// <param name="mstring">Required parameter: Example: </param>
        /// <param name="queryParameters">Additional optional query parameters are supported by this endpoint</param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse SimpleQuery(
                bool boolean,
                int number,
                string mstring,
                Dictionary<string, object> queryParameters = null);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="boolean">Required parameter: Example: </param>
        /// <param name="number">Required parameter: Example: </param>
        /// <param name="mstring">Required parameter: Example: </param>
        /// <param name="queryParameters">Additional optional query parameters are supported by this endpoint</param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> SimpleQueryAsync(
                bool boolean,
                int number,
                string mstring,
                Dictionary<string, object> queryParameters = null);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse Rfc3339DateTimeArray(List<DateTime> datetimes);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> Rfc3339DateTimeArrayAsync(List<DateTime> datetimes);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse Rfc1123DateTimeArray(List<DateTime> datetimes);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> Rfc1123DateTimeArrayAsync(List<DateTime> datetimes);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse Rfc1123DateTime(DateTime datetime);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> Rfc1123DateTimeAsync(DateTime datetime);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse UnixDateTime(DateTime datetime);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> UnixDateTimeAsync(DateTime datetime);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse UnixDateTimeArray(List<DateTime> datetimes);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> UnixDateTimeArrayAsync(List<DateTime> datetimes);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="date">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse Date(DateTime date);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="date">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> DateAsync(DateTime date);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="dates">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse DateArray(List<DateTime> dates);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="dates">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> DateArrayAsync(List<DateTime> dates);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse NoParams();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> NoParamsAsync();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="suites">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse IntegerEnumArray(List<Models.SuiteCode> suites);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="suites">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> IntegerEnumArrayAsync(List<Models.SuiteCode> suites);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="days">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse StringEnumArray(List<Models.Days> days);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="days">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> StringEnumArrayAsync(List<Models.Days> days);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="strings">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse StringArray(List<string> strings);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="strings">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> StringArrayAsync(List<string> strings);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="integers">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse NumberArray(List<int> integers);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="integers">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> NumberArrayAsync(List<int> integers);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="url">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse UrlParam(string url);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="url">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> UrlParamAsync(string url);

    }
} 