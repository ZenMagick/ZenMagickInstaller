<?php
/*
 * ZenMagick - Another PHP framework.
 * Copyright (C) 2006-2012 zenmagick.org
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or (at
 * your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street - Fifth Floor, Boston, MA  02110-1301, USA.
 */

namespace ZenMagick\Plugins;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class Installer extends LibraryInstaller {
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package) {
        $prefix = substr ($package->getPrettyName (), 0, 17);
        if ('zenmagick/plugin-' !== $prefix) {
            throw new \InvalidArgumentException(
                'Unable to install plugin, ZenMagick plugin package names  should always begin with "zenmagick/plugin-"'
            );
        }

        return 'plugins/'.substr($package->getPrettyName(), 17);
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType) {
        return 'zenmagick-plugin' === $packageType;
    }
}
