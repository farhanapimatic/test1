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
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel GetNoParams();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> GetNoParamsAsync();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="suites">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel GetIntegerEnumArray(List<Models.SuiteCodeEnum> suites);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="suites">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> GetIntegerEnumArrayAsync(List<Models.SuiteCodeEnum> suites);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="days">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel GetStringEnumArray(List<Models.DaysEnum> days);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="days">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> GetStringEnumArrayAsync(List<Models.DaysEnum> days);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="strings">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel GetStringArray(List<string> strings);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="strings">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> GetStringArrayAsync(List<string> strings);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="integers">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel GetNumberArray(List<int> integers);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="integers">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> GetNumberArrayAsync(List<int> integers);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="url">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel GetUrlParam(string url);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="url">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> GetUrlParamAsync(string url);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="mstring">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel GetStringParam(string mstring);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="mstring">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> GetStringParamAsync(string mstring);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="number">Required parameter: Example: </param>
        /// <param name="precision">Required parameter: Example: </param>
        /// <param name="mstring">Required parameter: Example: </param>
        /// <param name="url">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel GetMultipleParams(
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
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> GetMultipleParamsAsync(
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
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel GetSimpleQuery(
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
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> GetSimpleQueryAsync(
                bool boolean,
                int number,
                string mstring,
                Dictionary<string, object> queryParameters = null);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel GetRfc3339DateTime(DateTime datetime);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> GetRfc3339DateTimeAsync(DateTime datetime);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel GetRfc3339DateTimeArray(List<DateTime> datetimes);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> GetRfc3339DateTimeArrayAsync(List<DateTime> datetimes);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel GetRfc1123DateTimeArray(List<DateTime> datetimes);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> GetRfc1123DateTimeArrayAsync(List<DateTime> datetimes);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel GetRfc1123DateTime(DateTime datetime);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> GetRfc1123DateTimeAsync(DateTime datetime);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel GetUnixDateTime(DateTime datetime);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> GetUnixDateTimeAsync(DateTime datetime);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel GetUnixDateTimeArray(List<DateTime> datetimes);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> GetUnixDateTimeArrayAsync(List<DateTime> datetimes);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="date">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel GetDate(DateTime date);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="date">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> GetDateAsync(DateTime date);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="dates">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel GetDateArray(List<DateTime> dates);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="dates">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> GetDateArrayAsync(List<DateTime> dates);

    }
} 