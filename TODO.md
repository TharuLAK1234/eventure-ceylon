# EVENTURE CEYLON — Project TODO

Tourism Management Web Application · Laravel + MySQL · Agile Scrum (5 sprints, 25 weeks)
Source: CSE5015_130_1st_Milestone (Group 10)

Legend: `[ ]` open · assign via GitHub issue/PR · link each checked item to its commit/PR where possible.

---

## Sprint 1 — Planning, Requirements & System Design
- [ ] Finalize SRS (functional + non-functional requirements, Section 8)
- [ ] Confirm Context Diagram and Level 0/1 DFDs match final scope
- [ ] Finalize ER diagram and database schema (16 entities, Section 4.2)
- [ ] Normalize schema to 3NF and document design decisions
- [ ] Design system architecture (Laravel MVC layers, folder structure)
- [ ] Security design: RBAC roles, bcrypt (cost 12), Sanctum session strategy
- [ ] UI/UX wireframes in Figma (Home, Login, Register, Admin Dashboard, Package Details, Customer Dashboard)
- [ ] Set up GitHub repo branch strategy (main / dev / feature/*)
- [ ] Set up project board (Sprint 1–5 columns) and issue templates
- [ ] Draft Gantt chart / WBS and load into project management tool

## Sprint 2 — Setup, Auth & Package Management
- [ ] Initialize Laravel v10 project, configure `.env`, MySQL v8.0 connection
- [ ] Install Bootstrap 5 and base Blade layout
- [ ] Implement user registration with email verification
- [ ] Implement login/logout (Laravel Sanctum session auth)
- [ ] Implement password reset / change flow
- [ ] Implement role-based access middleware (Customer / Operations Staff / Admin)
- [ ] Migrations: `roles`, `users`
- [ ] Tour Package module: migration + model (`tour_packages`)
- [ ] Admin CRUD for tour packages (name, itinerary, pricing, duration, availability toggle)
- [ ] Package image gallery module (`package_images` table + upload)
- [ ] Public package search & filter
- [ ] Package details page (public, no login required)
- [ ] Booking module scaffolding: migration (`bookings`), booking form UI
- [ ] Vehicle allocation scaffolding (link to Section 8 auto-allocation requirement)
- [ ] Integrate Leaflet.js + OpenStreetMap on package detail page (no API key needed)
- [ ] Integrate Open-Meteo weather forecast on package pages

## Sprint 3 — Fleet, Payments & Extended Modules
- [ ] Migrations: `vehicles`, `drivers`, `vehicle_allocations`
- [ ] Admin CRUD: vehicle fleet (registration, type, seating, fuel type, status)
- [ ] Admin CRUD: driver profiles (license, contact, availability)
- [ ] Auto-allocation algorithm (match available vehicle + driver to confirmed booking)
- [ ] Manual override for driver/vehicle allocation (admin)
- [ ] Booking conflict detection (atomic transactions / row locking)
- [ ] Payment integration: PayHere (LKR) checkout flow
- [ ] Payment integration: Stripe (international cards) checkout flow
- [ ] Migrations: `payments`, `invoices`
- [ ] Webhook/callback handling + transaction verification (idempotent)
- [ ] PDF invoice generation via DomPDF
- [ ] Notification module: email (Mailgun) + SMS (Notify.lk) — migration `notifications`
- [ ] Inquiry module: contact form, `inquiries` table, staff response workflow, status tracking (Open/In Progress/Resolved)
- [ ] Review & Rating module: `reviews` table, star rating + comment, verified-booking check
- [ ] AI Travel Planner — Phase 1: rule-based recommendation engine (budget/days/interest-tag scoring)
- [ ] AI Travel Planner: `interest_tags`, `package_tags`, `itinerary_requests`, `itinerary_results` tables
- [ ] AI Travel Planner: `POST /api/itinerary/generate` endpoint + wizard UI
- [ ] AI Travel Planner — Phase 2 (stretch): Gemini Flash integration for narrative itineraries
- [ ] Smart Trip Budget Planner: interactive per-traveller cost breakdown UI
- [ ] Migration: `budget_plans`; save/convert plan to booking request
- [ ] AI Weather-Adaptive Itinerary Advisor: `weather_alerts` table, forecast-vs-itinerary check, notify/response capture

## Sprint 4 — Dashboard, Optimization & Testing
- [ ] Admin Control Dashboard: KPI overview (bookings, revenue, drivers, vehicles)
- [ ] Reporting & Analytics: Chart.js dashboards (bar/line/pie)
- [ ] Reporting: PDF/CSV export, filter by date range/module
- [ ] Admin: staff account management (create/edit role/deactivate, password reset links)
- [ ] Admin: company branding/currency/notification template config
- [ ] Review moderation panel (approve/reject/flag)
- [ ] Real-Time Vehicle Tracking: `vehicle_locations`, `driver_devices` tables, `tracking_enabled` flag on bookings
- [ ] Real-Time Vehicle Tracking: driver location POST endpoint + live map (Leaflet + polling/websockets)
- [ ] Emergency SOS: `sos_alerts`, `sos_escalation_log` tables
- [ ] Emergency SOS: SOS button (Geolocation API), `POST /api/sos/alert`, admin SOS panel, escalation logic
- [ ] Unit testing with PHPUnit (auth, booking, payment, allocation logic)
- [ ] API testing with Postman (all endpoints)
- [ ] Load testing with JMeter (500 concurrent users target)
- [ ] Cross-browser/responsive QA (Chrome, Firefox, Edge, Safari; 320px–2560px)
- [ ] Bug fixing pass from QA results
- [ ] Production server (Ubuntu 22.04 + Nginx) setup on cloud VPS

## Sprint 5 — Deployment, Training & Maintenance
- [ ] Database deployment + migration to production MySQL
- [ ] Deploy application to production VPS, configure HTTPS/SSL
- [ ] Automated daily database backups (30-day retention)
- [ ] Configure staging environment separate from production
- [ ] Integration + system testing (end-to-end)
- [ ] User Acceptance Testing (UAT) with stakeholders
- [ ] Security pass: CSRF tokens, XSS escaping check, penetration test
- [ ] Two-day staff training program (materials + sessions)
- [ ] Prepare user manuals / training documentation
- [ ] Performance monitoring setup post-launch
- [ ] Post-launch bug-fix and security-update process defined
- [ ] Final project delivery / handover

## Cross-Cutting / Documentation
- [ ] README with setup instructions (local dev + deployment)
- [ ] `.env.example` with required keys (PayHere, Stripe, Mailgun, Notify.lk, Gemini, Groq if used)
- [ ] API documentation (endpoints list)
- [ ] Data dictionary / ERD exported to repo (`/docs`)
- [ ] CI setup (run PHPUnit on PR)
- [ ] Contribution guide (branch naming, PR review rules)

## Risk Follow-ups (from Risk Assessment, Section 10.1)
- [ ] Payment gateway spike started early (Sprint 1) — Stripe sandbox testing
- [ ] Confirm atomic transaction + row locking design before Sprint 1 sign-off
- [ ] Cross-train team members on adjacent modules (mitigate unavailability risk)
- [ ] Pin third-party API SDK versions in Composer (PayHere/Stripe/Mailgun)

## Future Roadmap (Post-Launch, Section 12.6 — not in current 25-week scope)
- [ ] AI Chatbot (Groq/Llama 3)
- [ ] Smart Weather-Based Recommendations (destination suggestions)
- [ ] AI Dynamic Pricing engine
- [ ] Local Experience Marketplace (guide-facing module)
- [ ] Loyalty & Rewards System
