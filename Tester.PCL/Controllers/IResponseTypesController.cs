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
    public partial interface IResponseTypesController
    {
        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the DateTime? response from the API call</return>
        DateTime? GetUnixDateTime();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the DateTime? response from the API call</return>
        Task<DateTime?> GetUnixDateTimeAsync();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the List<bool> response from the API call</return>
        List<bool> GetBooleanArray();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the List<bool> response from the API call</return>
        Task<List<bool>> GetBooleanArrayAsync();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the void response from the API call</return>
        void GetHeaders();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the void response from the API call</return>
        Task GetHeadersAsync();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the List<DateTime> response from the API call</return>
        List<DateTime> Get3339DatetimeArray();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the List<DateTime> response from the API call</return>
        Task<List<DateTime>> Get3339DatetimeArrayAsync();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the bool? response from the API call</return>
        bool? GetBoolean();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the bool? response from the API call</return>
        Task<bool?> GetBooleanAsync();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the dynamic response from the API call</return>
        dynamic GetDynamicArray();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the dynamic response from the API call</return>
        Task<dynamic> GetDynamicArrayAsync();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the DateTime? response from the API call</return>
        DateTime? Get3339Datetime();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the DateTime? response from the API call</return>
        Task<DateTime?> Get3339DatetimeAsync();

        /// <summary>
        /// Get an array of integers.
        /// </summary>
        /// <return>Returns the List<int> response from the API call</return>
        List<int> GetIntegerArray();

        /// <summary>
        /// Get an array of integers.
        /// </summary>
        /// <return>Returns the List<int> response from the API call</return>
        Task<List<int>> GetIntegerArrayAsync();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the dynamic response from the API call</return>
        dynamic GetDynamic();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the dynamic response from the API call</return>
        Task<dynamic> GetDynamicAsync();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the DateTime? response from the API call</return>
        DateTime? GetDate();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the DateTime? response from the API call</return>
        Task<DateTime?> GetDateAsync();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the List<DateTime> response from the API call</return>
        List<DateTime> GetDateArray();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the List<DateTime> response from the API call</return>
        Task<List<DateTime>> GetDateArrayAsync();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the List<DateTime> response from the API call</return>
        List<DateTime> GetUnixDateTimeArray();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the List<DateTime> response from the API call</return>
        Task<List<DateTime>> GetUnixDateTimeArrayAsync();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the List<DateTime> response from the API call</return>
        List<DateTime> Get1123DateTimeArray();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the List<DateTime> response from the API call</return>
        Task<List<DateTime>> Get1123DateTimeArrayAsync();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the List<Models.SuiteCodeEnum> response from the API call</return>
        List<Models.SuiteCodeEnum> GetIntEnumArray();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the List<Models.SuiteCodeEnum> response from the API call</return>
        Task<List<Models.SuiteCodeEnum>> GetIntEnumArrayAsync();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the List<Models.DaysEnum> response from the API call</return>
        List<Models.DaysEnum> GetStringEnumArray();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the List<Models.DaysEnum> response from the API call</return>
        Task<List<Models.DaysEnum>> GetStringEnumArrayAsync();

        /// <summary>
        /// Gets a integer response
        /// </summary>
        /// <return>Returns the int? response from the API call</return>
        int? GetInteger();

        /// <summary>
        /// Gets a integer response
        /// </summary>
        /// <return>Returns the int? response from the API call</return>
        Task<int?> GetIntegerAsync();

        /// <summary>
        /// gets a binary object
        /// </summary>
        /// <return>Returns the Stream response from the API call</return>
        Stream GetBinary();

        /// <summary>
        /// gets a binary object
        /// </summary>
        /// <return>Returns the Stream response from the API call</return>
        Task<Stream> GetBinaryAsync();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the double? response from the API call</return>
        double? GetPrecision();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the double? response from the API call</return>
        Task<double?> GetPrecisionAsync();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the Models.SuiteCodeEnum? response from the API call</return>
        Models.SuiteCodeEnum? GetIntEnum();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the Models.SuiteCodeEnum? response from the API call</return>
        Task<Models.SuiteCodeEnum?> GetIntEnumAsync();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the List<Models.PersonModel> response from the API call</return>
        List<Models.PersonModel> GetModelArray();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the List<Models.PersonModel> response from the API call</return>
        Task<List<Models.PersonModel>> GetModelArrayAsync();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the Models.DaysEnum? response from the API call</return>
        Models.DaysEnum? GetStringEnum();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the Models.DaysEnum? response from the API call</return>
        Task<Models.DaysEnum?> GetStringEnumAsync();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the Models.PersonModel response from the API call</return>
        Models.PersonModel GetModel();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the Models.PersonModel response from the API call</return>
        Task<Models.PersonModel> GetModelAsync();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the long? response from the API call</return>
        long? GetLong();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the long? response from the API call</return>
        Task<long?> GetLongAsync();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the DateTime? response from the API call</return>
        DateTime? Get1123DateTime();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the DateTime? response from the API call</return>
        Task<DateTime?> Get1123DateTimeAsync();

    }
} 