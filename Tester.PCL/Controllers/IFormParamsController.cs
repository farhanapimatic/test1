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
        /// <param name="date">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel CreateSendDate(DateTime date);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="date">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> CreateSendDateAsync(DateTime date);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="file">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel CreateSendFile(FileStreamInfo file);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="file">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> CreateSendFileAsync(FileStreamInfo file);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="mvalue">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel CreateSendString(string mvalue);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="mvalue">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> CreateSendStringAsync(string mvalue);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="model">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel CreateSendModel(Models.EmployeeModel model);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="model">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> CreateSendModelAsync(Models.EmployeeModel model);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="days">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel CreateSendStringEnumArray(List<Models.DaysEnum> days);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="days">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> CreateSendStringEnumArrayAsync(List<Models.DaysEnum> days);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="suites">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel CreateSendIntegerEnumArray(List<Models.SuiteCodeEnum> suites);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="suites">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> CreateSendIntegerEnumArrayAsync(List<Models.SuiteCodeEnum> suites);

        /// <summary>
        /// Send a variety for form params. Returns file count and body params
        /// </summary>
        /// <param name="CreateSendMixedArrayInput">Object containing request parameters</param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel CreateSendMixedArray(CreateSendMixedArrayInput input);

        /// <summary>
        /// Send a variety for form params. Returns file count and body params
        /// </summary>
        /// <param name="CreateSendMixedArrayInput">Object containing request parameters</param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> CreateSendMixedArrayAsync(CreateSendMixedArrayInput input);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel CreateSendRfc3339DateTimeArray(List<DateTime> datetimes);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> CreateSendRfc3339DateTimeArrayAsync(List<DateTime> datetimes);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="models">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel CreateSendModelArray(List<Models.EmployeeModel> models);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="models">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> CreateSendModelArrayAsync(List<Models.EmployeeModel> models);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="strings">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel CreateSendStringArray(List<string> strings);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="strings">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> CreateSendStringArrayAsync(List<string> strings);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="integers">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel CreateSendIntegerArray(List<int> integers);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="integers">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> CreateSendIntegerArrayAsync(List<int> integers);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel CreateSendRfc1123DateTimeArray(List<DateTime> datetimes);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> CreateSendRfc1123DateTimeArrayAsync(List<DateTime> datetimes);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel CreateSendUnixDateTimeArray(List<DateTime> datetimes);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetimes">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> CreateSendUnixDateTimeArrayAsync(List<DateTime> datetimes);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="dates">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel CreateSendDateArray(List<DateTime> dates);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="dates">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> CreateSendDateArrayAsync(List<DateTime> dates);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="mvalue">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel CreateSendLong(long mvalue);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="mvalue">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> CreateSendLongAsync(long mvalue);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel CreateSendRfc3339DateTime(DateTime datetime);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> CreateSendRfc3339DateTimeAsync(DateTime datetime);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel CreateSendRfc1123DateTime(DateTime datetime);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> CreateSendRfc1123DateTimeAsync(DateTime datetime);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Models.ServerResponseModel CreateSendUnixDateTime(DateTime datetime);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="datetime">Required parameter: Example: </param>
        /// <return>Returns the Models.ServerResponseModel response from the API call</return>
        Task<Models.ServerResponseModel> CreateSendUnixDateTimeAsync(DateTime datetime);

    }
} 