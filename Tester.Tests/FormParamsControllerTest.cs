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
    public class FormParamsControllerTest : ControllerTestBase
    {
        /// <summary>
        /// Controller instance (for all tests)
        /// </summary>
        private static IFormParamsController controller;

        /// <summary>
        /// Setup test class
        /// </summary>
        [SetUp]
        public static void SetUpClass()
        {
            controller = GetClient().FormParams;
            applyConfiguration();
        }

        /// <summary>
        /// TODO: Add description for test TestSendDate 
        /// </summary>
        [Test]
        public async Task TestSendDate() 
        {
            // Parameters for the API call
            DateTime date = DateTime.ParseExact("1994-02-13", "yyyy'-'MM'-'dd", CultureInfo.InvariantCulture, DateTimeStyles.RoundtripKind);

            // Perform API call
            ServerResponseModel result = null;

            try
            {
                result = await controller.CreateSendDateAsync(date);
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

        /// <summary>
        /// TODO: Add description for test TestSendFile 
        /// </summary>
        [Test]
        public async Task TestSendFile() 
        {
            // Parameters for the API call
            FileStreamInfo file = TestHelper.GetFile("http://localhost:3000/response/image");

            // Perform API call
            ServerResponseModel result = null;

            try
            {
                result = await controller.CreateSendFileAsync(file);
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

        /// <summary>
        /// TODO: Add description for test TestSendString 
        /// </summary>
        [Test]
        public async Task TestSendString() 
        {
            // Parameters for the API call
            string mvalue = "TestString";

            // Perform API call
            ServerResponseModel result = null;

            try
            {
                result = await controller.CreateSendStringAsync(mvalue);
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

        /// <summary>
        /// TODO: Add description for test TestSendModel 
        /// </summary>
        [Test]
        public async Task TestSendModel() 
        {
            // Parameters for the API call
            EmployeeModel model = APIHelper.JsonDeserialize<EmployeeModel>("{\"name\":\"Shahid Khaliq\",\"age\":5147483645,\"address\":\"H # 531, S # 20\",\"uid\":\"123321\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\",\"salary\":20000,\"department\":\"Software Development\",\"joiningDay\":\"Saturday\",\"workingDays\":[\"Monday\",\"Tuesday\",\"Friday\"],\"boss\":{\"personType\":\"Boss\",\"name\":\"Zeeshan Ejaz\",\"age\":5147483645,\"address\":\"H # 531, S # 20\",\"uid\":\"123321\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\",\"salary\":20000,\"department\":\"Software Development\",\"joiningDay\":\"Saturday\",\"workingDays\":[\"Monday\",\"Tuesday\",\"Friday\"],\"dependents\":[{\"name\":\"Future Wife\",\"age\":5147483649,\"address\":\"H # 531, S # 20\",\"uid\":\"123412\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"},{\"name\":\"Future Kid\",\"age\":5147483648,\"address\":\"H # 531, S # 20\",\"uid\":\"312341\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"}],\"hiredAt\":\"Sun, 06 Nov 1994 08:49:37 GMT\",\"promotedAt\":1484719381},\"dependents\":[{\"name\":\"Future Wife\",\"age\":5147483649,\"address\":\"H # 531, S # 20\",\"uid\":\"123412\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"},{\"name\":\"Future Kid\",\"age\":5147483648,\"address\":\"H # 531, S # 20\",\"uid\":\"312341\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"}],\"hiredAt\":\"Sun, 06 Nov 1994 08:49:37 GMT\"}");

            // Perform API call
            ServerResponseModel result = null;

            try
            {
                result = await controller.CreateSendModelAsync(model);
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

        /// <summary>
        /// TODO: Add description for test TestSendStringEnumArray 
        /// </summary>
        [Test]
        public async Task TestSendStringEnumArray() 
        {
            // Parameters for the API call
            List<DaysEnum> days = APIHelper.JsonDeserialize<List<DaysEnum>>("[\"Tuesday\", \"Saturday\", \"Wednesday\", \"Monday\", \"Sunday\"]");

            // Perform API call
            ServerResponseModel result = null;

            try
            {
                result = await controller.CreateSendStringEnumArrayAsync(days);
            }
            catch(APIException) {};

            // Test response code
            Assert.IsTrue((httpCallBackHandler.Response.StatusCode >= 200)
                    && (httpCallBackHandler.Response.StatusCode <= 208),
                    "Status should be between 200 and 208");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsJsonObjectProperSubsetOf(
                    "{\"passed\":true}", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

        /// <summary>
        /// TODO: Add description for test TestSendIntegerEnumArray 
        /// </summary>
        [Test]
        public async Task TestSendIntegerEnumArray() 
        {
            // Parameters for the API call
            List<SuiteCodeEnum> suites = APIHelper.JsonDeserialize<List<SuiteCodeEnum>>("[1, 3, 4, 2, 3]");

            // Perform API call
            ServerResponseModel result = null;

            try
            {
                result = await controller.CreateSendIntegerEnumArrayAsync(suites);
            }
            catch(APIException) {};

            // Test response code
            Assert.IsTrue((httpCallBackHandler.Response.StatusCode >= 200)
                    && (httpCallBackHandler.Response.StatusCode <= 208),
                    "Status should be between 200 and 208");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsJsonObjectProperSubsetOf(
                    "{\"passed\":true}", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

        /// <summary>
        /// TODO: Add description for test TestSendMixedArray 
        /// </summary>
        [Test]
        public async Task TestSendMixedArray() 
        {
            // Parameters for the API call
            CreateSendMixedArrayInput input = new CreateSendMixedArrayInput();
            input.File = TestHelper.GetFile("http://localhost:3000/response/image");
            input.Integers = APIHelper.JsonDeserialize<List<int>>("[1,2,3,4,5]");
            input.Models = APIHelper.JsonDeserialize<List<EmployeeModel>>("[{\"name\":\"Shahid Khaliq\",\"age\":5147483645,\"address\":\"H # 531, S # 20\",\"uid\":\"123321\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\",\"salary\":20000,\"department\":\"Software Development\",\"joiningDay\":\"Saturday\",\"workingDays\":[\"Monday\",\"Tuesday\",\"Friday\"],\"boss\":{\"personType\":\"Boss\",\"name\":\"Zeeshan Ejaz\",\"age\":5147483645,\"address\":\"H # 531, S # 20\",\"uid\":\"123321\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\",\"salary\":20000,\"department\":\"Software Development\",\"joiningDay\":\"Saturday\",\"workingDays\":[\"Monday\",\"Tuesday\",\"Friday\"],\"dependents\":[{\"name\":\"Future Wife\",\"age\":5147483649,\"address\":\"H # 531, S # 20\",\"uid\":\"123412\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"},{\"name\":\"Future Kid\",\"age\":5147483648,\"address\":\"H # 531, S # 20\",\"uid\":\"312341\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"}],\"hiredAt\":\"Sun, 06 Nov 1994 08:49:37 GMT\",\"promotedAt\":1484719381},\"dependents\":[{\"name\":\"Future Wife\",\"age\":5147483649,\"address\":\"H # 531, S # 20\",\"uid\":\"123412\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"},{\"name\":\"Future Kid\",\"age\":5147483648,\"address\":\"H # 531, S # 20\",\"uid\":\"312341\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"}],\"hiredAt\":\"Sun, 06 Nov 1994 08:49:37 GMT\"},{\"name\":\"Shahid Khaliq\",\"age\":5147483645,\"address\":\"H # 531, S # 20\",\"uid\":\"123321\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\",\"salary\":20000,\"department\":\"Software Development\",\"joiningDay\":\"Saturday\",\"workingDays\":[\"Monday\",\"Tuesday\",\"Friday\"],\"boss\":{\"personType\":\"Boss\",\"name\":\"Zeeshan Ejaz\",\"age\":5147483645,\"address\":\"H # 531, S # 20\",\"uid\":\"123321\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\",\"salary\":20000,\"department\":\"Software Development\",\"joiningDay\":\"Saturday\",\"workingDays\":[\"Monday\",\"Tuesday\",\"Friday\"],\"dependents\":[{\"name\":\"Future Wife\",\"age\":5147483649,\"address\":\"H # 531, S # 20\",\"uid\":\"123412\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"},{\"name\":\"Future Kid\",\"age\":5147483648,\"address\":\"H # 531, S # 20\",\"uid\":\"312341\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"}],\"hiredAt\":\"Sun, 06 Nov 1994 08:49:37 GMT\",\"promotedAt\":1484719381},\"dependents\":[{\"name\":\"Future Wife\",\"age\":5147483649,\"address\":\"H # 531, S # 20\",\"uid\":\"123412\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"},{\"name\":\"Future Kid\",\"age\":5147483648,\"address\":\"H # 531, S # 20\",\"uid\":\"312341\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"}],\"hiredAt\":\"Sun, 06 Nov 1994 08:49:37 GMT\"}]");
            input.Strings = APIHelper.JsonDeserialize<List<string>>("[\"abc\", \"def\"]");

            // Perform API call
            ServerResponseModel result = null;

            try
            {
                result = await controller.CreateSendMixedArrayAsync(input);
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

        /// <summary>
        /// TODO: Add description for test TestSendRfc3339DateTimeArray 
        /// </summary>
        [Test]
        public async Task TestSendRfc3339DateTimeArray() 
        {
            // Parameters for the API call
            List<DateTime> datetimes = APIHelper.JsonDeserialize<List<DateTime>>("[\"1994-02-13T14:01:54.9571247Z\",\"1994-02-13T14:01:54.9571247Z\"]", new IsoDateTimeConverter());

            // Perform API call
            ServerResponseModel result = null;

            try
            {
                result = await controller.CreateSendRfc3339DateTimeArrayAsync(datetimes);
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

        /// <summary>
        /// TODO: Add description for test TestSendModelArray 
        /// </summary>
        [Test]
        public async Task TestSendModelArray() 
        {
            // Parameters for the API call
            List<EmployeeModel> models = APIHelper.JsonDeserialize<List<EmployeeModel>>("[{\"name\":\"Shahid Khaliq\",\"age\":5147483645,\"address\":\"H # 531, S # 20\",\"uid\":\"123321\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\",\"salary\":20000,\"department\":\"Software Development\",\"joiningDay\":\"Saturday\",\"workingDays\":[\"Monday\",\"Tuesday\",\"Friday\"],\"boss\":{\"personType\":\"Boss\",\"name\":\"Zeeshan Ejaz\",\"age\":5147483645,\"address\":\"H # 531, S # 20\",\"uid\":\"123321\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\",\"salary\":20000,\"department\":\"Software Development\",\"joiningDay\":\"Saturday\",\"workingDays\":[\"Monday\",\"Tuesday\",\"Friday\"],\"dependents\":[{\"name\":\"Future Wife\",\"age\":5147483649,\"address\":\"H # 531, S # 20\",\"uid\":\"123412\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"},{\"name\":\"Future Kid\",\"age\":5147483648,\"address\":\"H # 531, S # 20\",\"uid\":\"312341\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"}],\"hiredAt\":\"Sun, 06 Nov 1994 08:49:37 GMT\",\"promotedAt\":1484719381},\"dependents\":[{\"name\":\"Future Wife\",\"age\":5147483649,\"address\":\"H # 531, S # 20\",\"uid\":\"123412\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"},{\"name\":\"Future Kid\",\"age\":5147483648,\"address\":\"H # 531, S # 20\",\"uid\":\"312341\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"}],\"hiredAt\":\"Sun, 06 Nov 1994 08:49:37 GMT\"},{\"name\":\"Shahid Khaliq\",\"age\":5147483645,\"address\":\"H # 531, S # 20\",\"uid\":\"123321\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\",\"salary\":20000,\"department\":\"Software Development\",\"joiningDay\":\"Saturday\",\"workingDays\":[\"Monday\",\"Tuesday\",\"Friday\"],\"boss\":{\"personType\":\"Boss\",\"name\":\"Zeeshan Ejaz\",\"age\":5147483645,\"address\":\"H # 531, S # 20\",\"uid\":\"123321\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\",\"salary\":20000,\"department\":\"Software Development\",\"joiningDay\":\"Saturday\",\"workingDays\":[\"Monday\",\"Tuesday\",\"Friday\"],\"dependents\":[{\"name\":\"Future Wife\",\"age\":5147483649,\"address\":\"H # 531, S # 20\",\"uid\":\"123412\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"},{\"name\":\"Future Kid\",\"age\":5147483648,\"address\":\"H # 531, S # 20\",\"uid\":\"312341\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"}],\"hiredAt\":\"Sun, 06 Nov 1994 08:49:37 GMT\",\"promotedAt\":1484719381},\"dependents\":[{\"name\":\"Future Wife\",\"age\":5147483649,\"address\":\"H # 531, S # 20\",\"uid\":\"123412\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"},{\"name\":\"Future Kid\",\"age\":5147483648,\"address\":\"H # 531, S # 20\",\"uid\":\"312341\",\"birthday\":\"1994-02-13\",\"birthtime\":\"1994-02-13T14:01:54.9571247Z\"}],\"hiredAt\":\"Sun, 06 Nov 1994 08:49:37 GMT\"}]");

            // Perform API call
            ServerResponseModel result = null;

            try
            {
                result = await controller.CreateSendModelArrayAsync(models);
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

        /// <summary>
        /// TODO: Add description for test TestSendStringArray 
        /// </summary>
        [Test]
        public async Task TestSendStringArray() 
        {
            // Parameters for the API call
            List<string> strings = APIHelper.JsonDeserialize<List<string>>("[\"abc\", \"def\"]");

            // Perform API call
            ServerResponseModel result = null;

            try
            {
                result = await controller.CreateSendStringArrayAsync(strings);
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

        /// <summary>
        /// TODO: Add description for test TestSendIntegerArray 
        /// </summary>
        [Test]
        public async Task TestSendIntegerArray() 
        {
            // Parameters for the API call
            List<int> integers = APIHelper.JsonDeserialize<List<int>>("[1,2,3,4,5]");

            // Perform API call
            ServerResponseModel result = null;

            try
            {
                result = await controller.CreateSendIntegerArrayAsync(integers);
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

        /// <summary>
        /// TODO: Add description for test TestSendRfc1123DateTimeArray 
        /// </summary>
        [Test]
        public async Task TestSendRfc1123DateTimeArray() 
        {
            // Parameters for the API call
            List<DateTime> datetimes = APIHelper.JsonDeserialize<List<DateTime>>("[\"Sun, 06 Nov 1994 08:49:37 GMT\",\"Sun, 06 Nov 1994 08:49:37 GMT\"]", new CustomDateTimeConverter("r"));

            // Perform API call
            ServerResponseModel result = null;

            try
            {
                result = await controller.CreateSendRfc1123DateTimeArrayAsync(datetimes);
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

        /// <summary>
        /// TODO: Add description for test TestSendUnixDateTimeArray 
        /// </summary>
        [Test]
        public async Task TestSendUnixDateTimeArray() 
        {
            // Parameters for the API call
            List<DateTime> datetimes = APIHelper.JsonDeserialize<List<DateTime>>("[1484719381,1484719381]", new UnixDateTimeConverter());

            // Perform API call
            ServerResponseModel result = null;

            try
            {
                result = await controller.CreateSendUnixDateTimeArrayAsync(datetimes);
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

        /// <summary>
        /// TODO: Add description for test TestSendDateArray 
        /// </summary>
        [Test]
        public async Task TestSendDateArray() 
        {
            // Parameters for the API call
            List<DateTime> dates = APIHelper.JsonDeserialize<List<DateTime>>("[\"1994-02-13\",\"1994-02-13\"]", new CustomDateTimeConverter("yyyy'-'MM'-'dd"));

            // Perform API call
            ServerResponseModel result = null;

            try
            {
                result = await controller.CreateSendDateArrayAsync(dates);
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

        /// <summary>
        /// TODO: Add description for test TestSendLong 
        /// </summary>
        [Test]
        public async Task TestSendLong() 
        {
            // Parameters for the API call
            long mvalue = 5147483647;

            // Perform API call
            ServerResponseModel result = null;

            try
            {
                result = await controller.CreateSendLongAsync(mvalue);
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

        /// <summary>
        /// TODO: Add description for test TestSendRfc3339DateTime 
        /// </summary>
        [Test]
        public async Task TestSendRfc3339DateTime() 
        {
            // Parameters for the API call
            DateTime datetime = DateTime.ParseExact("1994-02-13T14:01:54.9571247Z", "yyyy'-'MM'-'dd'T'HH':'mm':'ss.FFFFFFFK", CultureInfo.InvariantCulture, DateTimeStyles.RoundtripKind);

            // Perform API call
            ServerResponseModel result = null;

            try
            {
                result = await controller.CreateSendRfc3339DateTimeAsync(datetime);
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

        /// <summary>
        /// TODO: Add description for test TestSendRfc1123DateTime 
        /// </summary>
        [Test]
        public async Task TestSendRfc1123DateTime() 
        {
            // Parameters for the API call
            DateTime datetime = DateTime.ParseExact("Sun, 06 Nov 1994 08:49:37 GMT", "r", CultureInfo.InvariantCulture, DateTimeStyles.RoundtripKind);

            // Perform API call
            ServerResponseModel result = null;

            try
            {
                result = await controller.CreateSendRfc1123DateTimeAsync(datetime);
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

        /// <summary>
        /// TODO: Add description for test TestSendUnixDateTime 
        /// </summary>
        [Test]
        public async Task TestSendUnixDateTime() 
        {
            // Parameters for the API call
            DateTime datetime = new DateTime(1970, 1, 1, 0, 0, 0, DateTimeKind.Utc).AddSeconds(double.Parse("1484719381"));

            // Perform API call
            ServerResponseModel result = null;

            try
            {
                result = await controller.CreateSendUnixDateTimeAsync(datetime);
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