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
    public partial interface ITemplateParamsController
    {
        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="integers">Required parameter: Example: </param>
        /// <return>Returns the Models.EchoResponseModel response from the API call</return>
        Models.EchoResponseModel GetSendIntegerArray(List<int> integers);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="integers">Required parameter: Example: </param>
        /// <return>Returns the Models.EchoResponseModel response from the API call</return>
        Task<Models.EchoResponseModel> GetSendIntegerArrayAsync(List<int> integers);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="strings">Required parameter: Example: </param>
        /// <return>Returns the Models.EchoResponseModel response from the API call</return>
        Models.EchoResponseModel GetSendStringArray(List<string> strings);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="strings">Required parameter: Example: </param>
        /// <return>Returns the Models.EchoResponseModel response from the API call</return>
        Task<Models.EchoResponseModel> GetSendStringArrayAsync(List<string> strings);

    }
} 