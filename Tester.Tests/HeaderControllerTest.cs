/*
 * Tester.Tests
 *
 * This file was automatically generated for Stamplay by APIMATIC v2.0 ( https://apimatic.io )
 */
using System;
using System.Collections.Generic;
using System.Globalization;
using System.IO;
using System.Threading.Tasks;
using Newtonsoft.Json.Converters;
using APIMATIC.SDK.Common; 
using APIMATIC.SDK.Http.Client;
using APIMATIC.SDK.Http.Response;
using Tester.Tests.Helpers;
using NUnit.Framework;
using Tester.PCL;
using Tester.PCL.Controllers;
using Tester.PCL.Models;
using Tester.PCL.Exceptions;

namespace Tester.Tests
{
    [TestFixture]
    public class HeaderControllerTest : ControllerTestBase
    {
        /// <summary>
        /// Controller instance (for all tests)
        /// </summary>
        private static IHeaderController controller;

        /// <summary>
        /// Setup test class
        /// </summary>
        [SetUp]
        public static void SetUpClass()
        {
            controller = GetClient().Header;
            applyConfiguration();
        }

        /// <summary>
        /// TODO: Add description for test TestSendHeaders 
        /// </summary>
        [Test]
        public async Task TestSendHeaders() 
        {
            // Parameters for the API call
            string customHeader = "TestString";
            string mvalue = "TestString";

            // Perform API call
            ServerResponseModel result = null;

            try
            {
                result = await controller.CreateSendHeadersAsync(customHeader, mvalue);
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsJsonObjectProperSubsetOf(
                    "{\"passed\":true}", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

    }
}