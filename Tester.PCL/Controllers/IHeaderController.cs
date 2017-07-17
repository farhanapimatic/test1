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
    public partial interface IHeaderController
    {
        /// <summary>
        /// Sends a single header params
        /// </summary>
        /// <param name="customHeader">Required parameter: Example: </param>
        /// <param name="mvalue">Required parameter: Represents the value of the custom header</param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Models.ServerResponse SendHeaders(string customHeader, string mvalue);

        /// <summary>
        /// Sends a single header params
        /// </summary>
        /// <param name="customHeader">Required parameter: Example: </param>
        /// <param name="mvalue">Required parameter: Represents the value of the custom header</param>
        /// <return>Returns the Models.ServerResponse response from the API call</return>
        Task<Models.ServerResponse> SendHeadersAsync(string customHeader, string mvalue);

    }
} 