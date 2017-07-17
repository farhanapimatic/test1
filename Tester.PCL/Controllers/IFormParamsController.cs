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
    public partial interface IFormParamsController
    {
        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="dates">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse SendDateArray(List<DateTime> dates);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="dates">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> SendDateArrayAsync(List<DateTime> dates);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="days">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse SendStringEnumArray(List<Models.Days> days);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="days">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> SendStringEnumArrayAsync(List<Models.Days> days);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="suites">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse SendIntegerEnumArray(List<Models.SuiteCode> suites);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="suites">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> SendIntegerEnumArrayAsync(List<Models.SuiteCode> suites);

        /// <summary>
        /// Send a variety for form params. Returns file count and body params
        /// </summary>
        /// <param name="SendMixedArrayInput">Object containing request parameters</param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse SendMixedArray(SendMixedArrayInput input);

        /// <summary>
        /// Send a variety for form params. Returns file count and body params
        /// </summary>
        /// <param name="SendMixedArrayInput">Object containing request parameters</param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> SendMixedArrayAsync(SendMixedArrayInput input);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse SendRfc3339DateTimeArray(List<DateTime> datetimes);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> SendRfc3339DateTimeArrayAsync(List<DateTime> datetimes);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="models">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse SendModelArray(List<Models.Employee> models);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="models">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> SendModelArrayAsync(List<Models.Employee> models);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="strings">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse SendStringArray(List<string> strings);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="strings">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> SendStringArrayAsync(List<string> strings);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="integers">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse SendIntegerArray(List<int> integers);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="integers">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> SendIntegerArrayAsync(List<int> integers);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse SendRfc1123DateTimeArray(List<DateTime> datetimes);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> SendRfc1123DateTimeArrayAsync(List<DateTime> datetimes);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse SendUnixDateTimeArray(List<DateTime> datetimes);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> SendUnixDateTimeArrayAsync(List<DateTime> datetimes);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="mvalue">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse SendLong(long mvalue);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="mvalue">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> SendLongAsync(long mvalue);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse SendRfc3339DateTime(DateTime datetime);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> SendRfc3339DateTimeAsync(DateTime datetime);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse SendRfc1123DateTime(DateTime datetime);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> SendRfc1123DateTimeAsync(DateTime datetime);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse SendUnixDateTime(DateTime datetime);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> SendUnixDateTimeAsync(DateTime datetime);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="date">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse SendDate(DateTime date);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="date">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> SendDateAsync(DateTime date);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="mvalue">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse SendString(string mvalue);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="mvalue">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> SendStringAsync(string mvalue);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="file">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse SendFile(FileStreamInfo file);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="file">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> SendFileAsync(FileStreamInfo file);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="model">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse SendModel(Models.Employee model);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="model">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> SendModelAsync(Models.Employee model);

    }
} 