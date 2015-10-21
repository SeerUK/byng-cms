<?php

/**
 * This file is part of the byng-cms package.
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

include_once __DIR__ . "/../vendor/autoload.php";
include_once __DIR__ . "/pimcore/config/startup.php";

try {
    Pimcore::run();
} catch (Exception $e) {
    if (class_exists("Logger")) {
        Logger::emerg($e);
    }

    throw $e;
}
